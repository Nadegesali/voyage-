const animatedTexts=document.querySelectorAll(".animated-text");

function animateText(animatedText) 
{
	const text=animatedText.textContent;
	const speed=150;
	animatedTexts.innerHTML=" ";
	for(let i=0;i<text.length;i++)
	 {
	 	animatedText.innerHTML=="<span>$(text[i])</span>";
	 }
	 let idx=0;
	 function writeChar()
	 {
	 	const span =animatedText.querySelectorAll("span")[idx];
	 	span.classList.add('fade');
	 	idx++;
	 	if(idx==text.length)
	 	{
	 		clearInterval(writeCharInterval);
	 	}
	 }
   let writeCharInterval=setInterval(writeChar,speed);

}



animatedTexts.forEach(animateText);



























/*i=0
let message="LE SITE VOYAGE++";
function defile() 
{
  if(i==message.lenght)
  {
  	i=0
  }
  if(i<=message.lenght)
  {
  	document.getElementById("Titre").innerHTML=message.substring(0,i)
  	i=i+1
  }
  setTimeout("defile"(),200)
}

defile();*/

//<body id="principal">
//document.getElementById("Titre").innerHTML
//class="div" id="Titre"

//LE SITE VOYAGE<sup>++</sup>
/*<script >
          let text="LE SITE VOYAGE"
          let result=text.substring(1,4)
          Document.getElementById("Titre").innerHTML=result;
        </script>*/



/*border-top-left-radius: 50px;
	 border-bottom-right-radius: 50px;
   box-shadow: 10px 10px 10px 10px #FFFFFF;*/
       