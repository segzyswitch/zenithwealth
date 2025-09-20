<?php
require('config/session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mooninvests - Pending deposits</title>
  <link rel="shortcut icon" href="../icon-o.png"
    type="image/x-icon">
  <link rel="stylesheet" href="./assets/theme/global/css/bootstrap.min.css" />
  <link rel="stylesheet" href="./assets/theme/global/css/line-awesome.min.css" />
  <link rel="stylesheet" href="./assets/theme/global/css/bootstrap-icons.min.css" />
  <link rel="stylesheet" href="./assets/theme/global/css/select2.min.css" />
  <link rel="stylesheet" href="./assets/theme/global/css/toaster.css" />
  <link rel="stylesheet" href="./assets/theme/global/css/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./assets/theme/global/css/apexcharts.css" />
  <link rel="stylesheet" href="./assets/theme/global/css/datepicker.min.css" />
  <link rel="stylesheet" href="./assets/theme/admin/css/style.css" />
  <link rel="stylesheet" href="./assets/theme/admin/css/simple-bar.css" />
  <link rel="stylesheet" href="./assets/theme/admin/css/responsive.css" />
  <link rel="stylesheet" href="./assets/theme/admin/css/summernote-lite.min.css" />
  <link rel="stylesheet" href="./assets/theme/admin/css/spectrum.css" />
</head>

<body>

  <!-- SIDEBAR -->
  <?php include 'inc/sidebar.php'; ?>

  <div id="mainContent" class="main_content">
    <!-- HEADER -->
    <?php include 'inc/header.php'; ?>

    <div class="dashboard_container">
      <section>
        <h3 class="page-title">Pending deposits</h3>

        <div class="card">
          <div class="responsive-table">
            <table>
              <thead>
                <tr>
                  <th>Initiated At</th>
                  <th>Trx</th>
                  <th>User</th>
                  <th>Amount</th>
                  <th>Source</th>
                  <th>Proof</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($Authroller->pendingDeposits() as $key => $value) {
                  $user_info = $Authroller->singleUser($value['user_id']);
                  ?>
                <tr id="pending<?php echo $value['id'] ?>">
                  <td data-label="Initiated At">
                    <span><?php echo date('Y-m-d h:i A', strtotime($value['createdat'])) ?></span>
                  </td>
                  <td data-label="Trx">
                    <span><?php echo $value['invoice'] ?></span>
                  </td>
                  <td data-label="User">
                    <?php echo $user_info['fname'].' '.$user_info['lname'] ?>
                  </td>
                  <td data-label="Amount">
                    <?php echo '$'.number_format($value['amount']).'.00' ?>
                  </td>
                  <td data-label="Source">
                    <?php echo $value['source'] ?>
                  </td>
                  <td data-label="Source">
                    <a class="proof-btn" href="./assets/deposits/<?php echo $value['proof'] ?>" target="_blank">Preview</a>
                  </td>
                  <td data-label="Status">
                    <?php
                    if($value['status']=='success') echo '<span class="badge badge--success">Success</span>';
                    elseif($value['status']=='failed') echo '<span class="badge badge--danger">Failed</span>';
                    else echo '<span class="badge badge--warning">Pending</span>';
                    ?>
                  </td>
                  <td data-label="Action">
                    <select data-trx="<?php echo $value['id'] ?>"
                      id="SLCT<?php echo $value['id'] ?>"
                      class="form-select status-select w-100 py-1">
                      <option value="" selected>Pending</option>
                      <option value="success">Accept</option>
                      <option value="failed">Decline</option>
                    </select>
                  </td>
                </tr>
                  <?php
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </section>
    </div>
  </div>

  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body d-flex p-0">
        <img src="" id="modalImg" style="max-height:85vh;margin:auto;">
      </div>
      <div class="modal-footer p-0">
        <button type="button" class="btn text--danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


  <script>
  const openpage = document.querySelector('.sidebar-menu-link[href="#collapseDepositControl"]');
  document.querySelector('#collapseDepositControl').classList.add('show');
  openpage.classList.remove('collapse');
  openpage.classList.add('active');
  </script>

  <script src="./assets/theme/global/js/jquery-3.7.1.min.js"></script>
  <script src="./assets/theme/global/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/theme/global/js/select2.min.js"></script>
  <script src="./assets/theme/global/js/toaster.js"></script>
  <script src="./assets/theme/global/js/swiper-bundle.min.js"></script>
  <script src="./assets/theme/global/js/apexcharts.js"></script>
  <script src="./assets/theme/global/js/datepicker.min.js"></script>
  <script src="./assets/theme/global/js/datepicker.en.js"></script>
  <script src="./assets/theme/admin/js/ckd.js"></script>
  <script src="./assets/theme/admin/js/simple-bar.min.js"></script>
  <script src="./assets/theme/admin/js/script.js"></script>
  <script src="./assets/theme/admin/js/summernote-lite.min.js"></script>
  <script src="./assets/theme/admin/js/spectrum.js"></script>

  <script>
    "use strict";
    function notify(status, message) {
      toastr[status](message);
    }
  </script>
  <script>
    $(".proof-btn").click(function(ev) {
      ev.preventDefault();
      const proof = this.href;
      $("#modalImg").attr('src', proof);
      $("#exampleModal").modal('show');
      // alert(proof)
    });

    $(".status-select").change(function(){
      const trx = $(this).data('trx')
      const status = $(this).val();
      $.ajax({
        url: "config/process.php",
        type: "GET",
        data: {
          'payment_status': trx,
          'status': status
        },
        beforeSend: function() {
          $("#SLCT"+trx).prop('disabled', true);
        },
        success: function(data) {
          if ( data.search('changed') !== -1 ) {
            notify('success', data);
            $("#pending"+trx).addClass('bg--success');
            $("#pending"+trx).hide(1000)
            return false;
          } else {
            notify('warning', data);
          }
          $("#SLCT"+trx).prop('disabled', false);
        },
        error: function() {
          notify('warning', 'Something went wrong, please try again');
          $("#SLCT"+trx).prop('disabled', false);
        }
      });
    })
  </script>
  <script>
    "use strict";
    (function () {
      const htmlRoot = document.documentElement;
      const sidebarControlBtn = document.querySelector('.sidebar-control-btn');
      const menuTitle = document.querySelectorAll('.sidebar-menu-title');
      const minWidth = 1199;

      window.addEventListener("DOMContentLoaded", () => {
        handleSetAttribute(htmlRoot, 'data-sidebar', "lg");
        handleResize();

        sidebarControlBtn.addEventListener("click", () => {
          const windowWidth = window.innerWidth;
          if (windowWidth <= minWidth) {
            showSidebar();
            createOverlay();
          } else {
            handleSidebarToggle();
          }
        });
      });

      function createOverlay() {
        const overlay = document.createElement('div');
        overlay.setAttribute("id", "overlay-wrapper");

        overlay.style.cssText = `
                    position: fixed;
                    inset: 0;
                    width: 100%;
                    height: 100vh;
                    background: rgb(0 0 0 / 20%);
                    z-index: 19;
                `;
        document.body.appendChild(overlay);

        overlay.addEventListener("click", () => {
          hideSidebar();
          removeOverlay();
        });
      }

      function removeOverlay() {
        const overlayWrapper = document.querySelector("#overlay-wrapper")
        overlayWrapper && overlayWrapper.remove();
      }

      function handleSetAttribute(elem, attr, value = 'lg') {
        elem.setAttribute(attr, value);
      }

      function handleGetAttribute(elem, attr) {
        return elem.getAttribute(attr);
      }

      function showSidebar() {
        const sidebar = document.querySelector('.sidebar');
        if (sidebar) {
          sidebar.style.transform = 'translateX(0%)';
          sidebar.style.visibility = 'visible';
        }
      }

      function hideSidebar() {
        const sidebar = document.querySelector('.sidebar');
        if (sidebar) {
          sidebar.style.transform = 'translateX(-100%)';
          sidebar.style.visibility = 'hidden';
        }
      }

      function handleSidebarToggle() {
        const currentSidebar = handleGetAttribute(htmlRoot, 'data-sidebar');
        const newAttributes = currentSidebar === 'sm' ? 'lg' : 'sm';

        handleSetAttribute(htmlRoot, 'data-sidebar', newAttributes);

        for (const title of menuTitle) {
          const dataText = title.getAttribute('data-text');
          title.innerHTML = newAttributes === 'sm' ? '<i class="las la-ellipsis-h"></i>' : dataText;
        }
      }

      function handleResize() {
        const windowWidth = window.innerWidth;
        if (windowWidth <= minWidth) {
          handleSetAttribute(htmlRoot, 'data-sidebar', "lg");
          hideSidebar();
          removeOverlay();
        } else {
          removeOverlay();
          showSidebar();
        }
      }

      window.addEventListener('resize', handleResize);
      if (document.querySelectorAll(".sidebar-menu .collapse")) {
        const collapses = document.querySelectorAll(".sidebar-menu .collapse");
        Array.from(collapses).forEach(function (collapse) {
          const collapseInstance = new bootstrap.Collapse(collapse, {
            toggle: false,
          });
          collapse.addEventListener("show.bs.collapse", function (e) {
            e.stopPropagation();
            const closestCollapse = collapse.parentElement.closest(".collapse");
            if (closestCollapse) {
              const siblingCollapses = closestCollapse.querySelectorAll(".collapse");
              Array.from(siblingCollapses).forEach(function (siblingCollapse) {
                const siblingCollapseInstance = bootstrap.Collapse.getInstance(siblingCollapse);
                if (siblingCollapseInstance === collapseInstance) {
                  return;
                }
                siblingCollapseInstance.hide();
              });
            } else {
              const getSiblings = function (elem) {
                const siblings = [];
                let sibling = elem.parentNode.firstChild;
                while (sibling) {
                  if (sibling.nodeType === 1 && sibling !== elem) {
                    siblings.push(sibling);
                  }
                  sibling = sibling.nextSibling;
                }
                return siblings;
              };
              const siblings = getSiblings(collapse.parentElement);
              Array.from(siblings).forEach(function (item) {
                if (item.childNodes.length > 2)
                  item.firstElementChild.setAttribute("aria-expanded", "false");
                const ids = item.querySelectorAll("*[id]");
                Array.from(ids).forEach(function (item1) {
                  item1.classList.remove("show");
                  if (item1.childNodes.length > 2) {
                    const val = item1.querySelectorAll("ul li a");
                    Array.from(val).forEach(function (subitem) {
                      if (subitem.hasAttribute("aria-expanded"))
                        subitem.setAttribute("aria-expanded", "false");
                    });
                  }
                });
              });
            }
          });

          collapse.addEventListener("hide.bs.collapse", function (e) {
            e.stopPropagation();
            const childCollapses = collapse.querySelectorAll(".collapse");
            Array.from(childCollapses).forEach(function (childCollapse) {
              let childCollapseInstance;
              childCollapseInstance = bootstrap.Collapse.getInstance(childCollapse);
              childCollapseInstance.hide();
            });
          });
        });
      }

    }());
  </script>
  <script>
    "use strict";
    const header = document.querySelector(".header");
    if (header) {
      const checkScroll = () => {
        if (window.scrollY > 0) {
          header.classList.add("sticky");
        } else {
          header.classList.remove("sticky");
        }
      };
      window.addEventListener("scroll", checkScroll);
      window.addEventListener("load", checkScroll);
    }
  </script>
</body>

</html>