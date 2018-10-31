function result(search)
{
	if(search.value=='')
	{
		document.getElementById('info').innerHTML = ''
		return
	}
	else if(search.value.length==1)
	{
		document.getElementById('info').innerHTML = ''
		return
	}
	
	params = "search="+search.value
	request = new ajaxRequest()
	request.open("POST","search.php",true)
	
	 request.setRequestHeader("Content-type", "application/x-www-form-urlencoded")    
	 request.setRequestHeader("Content-length", params.length)    
	 request.setRequestHeader("Connection", "close")
	 
	 request.onreadystatechange = function()
	 {
		if(this.readyState == 4)
		{
			if(this.status ==200)
			{
				if(this.responseText != null)
				{
					document.getElementById('info').innerHTML = this.responseText;
				}
				else alert("AJAX Error : No data received")
			}
			else alert("AJAX Error: "+this.statusText)
		}}
		request.send(params)
	 }	 
	 
	 
	 function ajaxRequest() {
			try    { 
					var request = new XMLHttpRequest()    
					}    
			catch(e1)    {        
			try        {            
					request = new ActiveXObject("Msxml2.XMLHTTP")        
					}      
			catch(e2)        {            
			try            {                
					request = new ActiveXObject("Microsoft.XMLHTTP")            }            
			catch(e3)  {                
					request = false            
						}        
						}    }    
						
				return request } 