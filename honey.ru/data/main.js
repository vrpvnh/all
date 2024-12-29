let menu_button = document.getElementsByClassName('phone_menu')[0];
let element0 = document.getElementsByClassName('phone_menu_element0')[0];
let element1 = document.getElementsByClassName('phone_menu_element1')[0];
 let menu = document.getElementsByClassName('menu_phone_window')[0];
let ww = window.innerWidth;

	let logic = 0;

menu_button.onclick = function()
	{
		if(logic == 0)
			{
				logic = 1;
				element0.style.margin = "15px auto 0 auto";
				element1.style.margin = "0px auto 0 auto";
				element0.style.transform = "rotate(-50deg)"; 
				element1.style.transform = "rotate(50deg)"; 
				menu.style.right = "0px"; 
				
			}
		else if(logic == 1)
			{
				logic = 0;
				element0.style.margin = "15px auto 0 auto";
				element1.style.margin = "10px auto 0 auto";
				element0.style.transform = "rotate(0deg)"; 
				element1.style.transform = "rotate(0deg)"; 
				menu.style.right = "-400px"; 
			}
			console.log(logic);
	}
let login_open = document.getElementsByClassName('login_form_window_open');
let login_close = document.getElementsByClassName('login_form_window_close')[0];
let login_window = document.getElementsByClassName('login_window')[0];
	let logic_w = 0;
	for(i = 0;i<=1;i++)
		{
			login_open[i].onclick = function()
				{
					if(logic_w == 0)
						{
							logic_w = 1;
							login_window.style.display = "block";
							// login_window.style.opacity = "1";
							logic = 0;
							element0.style.margin = "15px auto 0 auto";
							element1.style.margin = "10px auto 0 auto";
							element0.style.transform = "rotate(0deg)"; 
							element1.style.transform = "rotate(0deg)"; 
							menu.style.right = "-400px"; 
						}
					else if(logic_w == 1)
						{
							logic_w = 0;
							login_window.style.display = "none";
						}
						// console.log(logic_w);
				}
		}
login_close.onclick = function() 
	{
		 if(logic_w == 1)
			{
				logic_w = 0;
				login_window.style.display = "none";
				// login_window.style.opacity = "0";
			}
	}
// create_form_phone
// FORM PHONE MASK
let elementphone = document.getElementById('elementphone');
					let maskOptions = {
					    mask: '+7(000)000-00-00',
					    lazy: false
					};
					let mask = new IMask(elementphone, maskOptions);