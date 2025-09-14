/* Simple standalone version of Laravel-Notify style JS */

(function(global) {
  "use strict";

  // Default config
  const config = {
    timeout: 5000,        // how long the notification stays (ms)
    position: "top right",// "top right", "top left", etc.
    theme: "light",       // light or dark
    // you can add more (animations, icons etc.)
  };

  // Create / get container element
  function getNotifyContainer() {
    let container = document.querySelector(".notify-container");
    if (!container) {
      container = document.createElement("div");
      container.className = "notify-container";
      // set position via class or style
      container.style.position = "fixed";
      container.style.zIndex = 9999;
      // position
      if (config.position.includes("top")) {
        container.style.top = "1rem";
      } else {
        container.style.bottom = "1rem";
      }
      if (config.position.includes("right")) {
        container.style.right = "1rem";
      } else {
        container.style.left = "1rem";
      }
      document.body.appendChild(container);
    }
    return container;
  }

  // Show a notification
  function notify({ type = "info", title = "", text = "" } = {}) {
    const container = getNotifyContainer();

    const notif = document.createElement("div");
    notif.classList.add("notify", `notify-${type}`, `notify-theme-${config.theme}`);

    // Optional title
    if (title) {
      const t = document.createElement("div");
      t.classList.add("notify-title");
      t.innerText = title;
      notif.appendChild(t);
    }
    // Text body
    const b = document.createElement("div");
    b.classList.add("notify-text");
    b.innerText = text;
    notif.appendChild(b);

    // Close button
    const closeBtn = document.createElement("button");
    closeBtn.classList.add("notify-close");
    closeBtn.innerText = "×";
    closeBtn.onclick = function() {
      removeNotify(notif);
    };
    notif.appendChild(closeBtn);

    container.appendChild(notif);

    // animate in (you can use CSS transitions)
    setTimeout(() => {
      notif.classList.add("notify-show");
    }, 10);

    // auto remove after timeout
    setTimeout(() => {
      removeNotify(notif);
    }, config.timeout);

    return notif;
  }

  function removeNotify(element) {
    if (!element) return;
    element.classList.remove("notify-show");
    element.classList.add("notify-hide");
    // when hide animation ends, remove from DOM
    element.addEventListener("transitionend", function onEnd(ev) {
      if (ev.propertyName === "opacity" || ev.propertyName === "transform") {
        element.removeEventListener("transitionend", onEnd);
        if (element.parentElement) {
          element.parentElement.removeChild(element);
        }
      }
    });
  }

  // Helper shorthands
  function notifySuccess(text, title = "Success") {
    notify({ type: "success", title, text });
  }
  function notifyError(text, title = "Error") {
    notify({ type: "error", title, text });
  }
  function notifyWarning(text, title = "Warning") {
    notify({ type: "warning", title, text });
  }
  function notifyInfo(text, title = "Info") {
    notify({ type: "info", title, text });
  }

  // Expose to global
  global.notify = notify;
  global.notifySuccess = notifySuccess;
  global.notifyError = notifyError;
  global.notifyWarning = notifyWarning;
  global.notifyInfo = notifyInfo;

})(window);
