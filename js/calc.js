





function calcthis()
{ 
  var planperc=new Array(0,0,0,0,0,0,0);
  var depo = document.getElementById("deposit").value;
  var perc = document.getElementById("percent").value;

// =========================================================================================================================











// PLAN 1 ===================================================================================================================
if (perc == "perc1")  {planperc=Array(120,120,120,120,120,120,120)
  if (depo < 10)
	{alert ("Minimal deposit for this plan is $10"); document.getElementById("deposit").value = 10; calcthis();}
	else
	{
	if (depo > 5000)
	  {alert ("Maximal deposit for this plan  is $5000"); document.getElementById("deposit").value = 5000; calcthis();}
	  else
	  {
	  if (depo < 5000)
		{
  
		  document.getElementById("inpvar1").innerHTML = planperc[0];
		  document.getElementById("inpvar2").innerHTML = planperc[0] * depo / 100;
		}
		else
		{
		  if (depo < 5000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[1];
			  document.getElementById("inpvar2").innerHTML = planperc[1] * depo / 100;
			}
			else
		{
		  if (depo < 5000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[2];
			  document.getElementById("inpvar2").innerHTML = planperc[2] * depo / 100;
			}
			else
		{
		  if (depo < 5000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[3];
			  document.getElementById("inpvar2").innerHTML = planperc[3] * depo / 100;
			}
			else
				{
		  if (depo < 5000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[4];
			  document.getElementById("inpvar2").innerHTML = planperc[4] * depo / 100;
			}
			else
		{
		  if (depo < 5000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[5];
			  document.getElementById("inpvar2").innerHTML = planperc[5] * depo / 100;
			}
			
			else
			{
			  document.getElementById("inpvar1").innerHTML = planperc[6];
			  document.getElementById("inpvar2").innerHTML = planperc[6] * depo / 100;
			}
		}
	  }
	}
	}
	}
	}
	}
};   
// PLAN 2 ===================================================================================================================
if (perc == "perc2")  {planperc=Array(140,140,140,140,140,140,140)
  if (depo < 500)
	{alert ("Minimal deposit for this plan is $500"); document.getElementById("deposit").value = 5001; calcthis();}
	else
	{
	if (depo > 10000)
	  {alert ("Maximal deposit for this plan  is $10000"); document.getElementById("deposit").value = 10000; calcthis();}
	  else
	  {
	  if (depo < 10000)
		{
  
		  document.getElementById("inpvar1").innerHTML = planperc[0];
		  document.getElementById("inpvar2").innerHTML = planperc[0] * depo / 100;
		}
		else
		{
		  if (depo < 1000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[1];
			  document.getElementById("inpvar2").innerHTML = planperc[1] * depo / 100;
			}
			else
		{
		  if (depo < 10000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[2];
			  document.getElementById("inpvar2").innerHTML = planperc[2] * depo / 100;
			}
			else
		{
		  if (depo < 10000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[3];
			  document.getElementById("inpvar2").innerHTML = planperc[3] * depo / 100;
			}
			else
				{
		  if (depo < 10000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[4];
			  document.getElementById("inpvar2").innerHTML = planperc[4] * depo / 100;
			}
			else
		{
		  if (depo < 10000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[5];
			  document.getElementById("inpvar2").innerHTML = planperc[5] * depo / 100;
			}
			
			else
			{
			  document.getElementById("inpvar1").innerHTML = planperc[6];
			  document.getElementById("inpvar2").innerHTML = planperc[6] * depo / 100;
			}
		}
	  }
	}
	}
	}
	}
	}
};

// PLAN 3 ===================================================================================================================
if (perc == "perc3")  {planperc=Array(200,200,200,200,200,200,200)
  if (depo < 1000)
	{alert ("Minimal deposit for this plan is $1000"); document.getElementById("deposit").value = 10000; calcthis();}
	else
	{
	if (depo > 100000)
	  {alert ("Maximal deposit for this plan  is $100000"); document.getElementById("deposit").value = 100000; calcthis();}
	  else
	  {
	  if (depo < 100000)
		{
  
		  document.getElementById("inpvar1").innerHTML = planperc[0];
		  document.getElementById("inpvar2").innerHTML = planperc[0] * depo / 100;
		}
		else
		{
		  if (depo < 100000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[1];
			  document.getElementById("inpvar2").innerHTML = planperc[1] * depo / 100;
			}
			else
		{
		  if (depo < 100000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[2];
			  document.getElementById("inpvar2").innerHTML = planperc[2] * depo / 100;
			}
			else
		{
		  if (depo < 100000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[3];
			  document.getElementById("inpvar2").innerHTML = planperc[3] * depo / 100;
			}
			else
				{
		  if (depo < 100000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[4];
			  document.getElementById("inpvar2").innerHTML = planperc[4] * depo / 100;
			}
			else
		{
		  if (depo < 100000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[5];
			  document.getElementById("inpvar2").innerHTML = planperc[5] * depo / 100;
			}
			
			else
			{
			  document.getElementById("inpvar1").innerHTML = planperc[6];
			  document.getElementById("inpvar2").innerHTML = planperc[6] * depo / 100;
			}
		}
	  }
	}
	}
	}
	}
	}
};

if (perc == "perc4")  {planperc=Array(250,250,250,250,250,250,250)
  if (depo < 1000)
	{alert ("Minimal deposit for this plan is $1000"); document.getElementById("deposit").value = 10000; calcthis();}
	else
	{
	if (depo > 100000)
	  {alert ("Maximal deposit for this plan  is $100000"); document.getElementById("deposit").value = 100000; calcthis();}
	  else
	  {
	  if (depo < 100000)
		{
  
		  document.getElementById("inpvar1").innerHTML = planperc[0];
		  document.getElementById("inpvar2").innerHTML = planperc[0] * depo / 100;
		}
		else
		{
		  if (depo < 100000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[1];
			  document.getElementById("inpvar2").innerHTML = planperc[1] * depo / 100;
			}
			else
		{
		  if (depo < 100000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[2];
			  document.getElementById("inpvar2").innerHTML = planperc[2] * depo / 100;
			}
			else
		{
		  if (depo < 100000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[3];
			  document.getElementById("inpvar2").innerHTML = planperc[3] * depo / 100;
			}
			else
				{
		  if (depo < 100000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[4];
			  document.getElementById("inpvar2").innerHTML = planperc[4] * depo / 100;
			}
			else
		{
		  if (depo < 100000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[5];
			  document.getElementById("inpvar2").innerHTML = planperc[5] * depo / 100;
			}
			
			else
			{
			  document.getElementById("inpvar1").innerHTML = planperc[6];
			  document.getElementById("inpvar2").innerHTML = planperc[6] * depo / 100;
			}
		}
	  }
	}
	}
	}
	}
	}
};

}; // function