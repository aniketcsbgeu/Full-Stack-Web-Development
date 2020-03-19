<!DOCTYPE html>
<html>
<head>
	<title>Count input keyword</title>
</head>
<body>
	<p id='anik'></p>
<script type="text/javascript" src="json.js"></script>
<script type="text/javascript">
  var key="";
  var x = prompt("Enter a keyword:");

  if (x == null || x == "") {
    document.getElementById("abc").innerHTML = "window.close() Try another browser.";
    window.close();
  } else {
    key = x;
  var output = "";
  for(i=0;i<data.length;i++)
  {
  	    // match keyword from title.
	  	title = data[i]["title"]; 
	  	var temp = title;
	  	title = key + "$"+ title;
	  	var a = new Array(title.length).fill(0);
	  	var l = 0; var r = 0;
	  	var count= 0;
	  	for(j=1;j<title.length;j++)
	  	{ 
	        if (j > r) 
	        { 
	            l = j;
	            r = j; 
	  			while (r<title.length && title[r-l] == title[r]) 
	                r++; 
	            a[j] = r-l; 
	            r--; 
	        } 
	        else
	        { 
	            k = j-l;  
	            if (a[k] < r-j+1) 
	                a[j] = a[k];  
	            else
	            { 
	                l = j; 
	                while (r<title.length && title[r-l] == title[r]) 
	                    r++; 
	                a[j] = r-l; 
	                r--; 
	            } 
	        } 
	    } 
	    for (k = 0; k < a.length; k++) 
    	{ 
        	if (a[k] == key.length)
            	count++;
   		}

   		//match keyword from body.
   		body = data[i]["body"]; 
	  	body = key + "$"+ body;
	  	var l = 0; var r = 0;
	  	a.fill(0);
	  	for(j=1;j<body.length;j++)
	  	{ 
	        if (j > r) 
	        { 
	            l = j;
	            r = j; 
	  			while (r<body.length && body[r-l] == body[r]) 
	                r++; 
	            a[j] = r-l; 
	            r--; 
	        } 
	        else
	        { 
	            k = j-l;  
	            if (a[k] < r-j+1) 
	                a[j] = a[k];  
	            else
	            { 
	                l = j; 
	                while (r<body.length && body[r-l] == body[r]) 
	                    r++; 
	                a[j] = r-l; 
	                r--; 
	            } 
	        } 
	    } 
	    for (k = 0; k < a.length; k++) 
    	{ 
        	if (a[k] == key.length )
            	count++;
   		} 
   		if(count!= 0)
   		{
			output += data[i]["userId"]+"  "+data[i]["id"]+"  "+count+"<br>";
			console.log(output);
   		}
	} 
  	
	document.getElementById('anik').innerHTML = output;
  }
</script>
</body>
</html>