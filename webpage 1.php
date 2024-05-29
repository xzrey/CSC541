<HTML>
<HEAD>
  <TITLE>Hello from the 60's Again</TITLE>
</HEAD>

<SCRIPT>
function randomcolor(event) {
  event.target.style.color = '#' + Math.floor(Math.random()*16777216).toString(16);
}
</SCRIPT>

<BODY>
  <P onmousemove="randomcolor(event);" STYLE="position:absolute;top:10px;left:10px;color:black">Hello from the 60's</P>
  <P onmousemove="randomcolor(event);" STYLE="position:absolute;top:50px;left:20px;color:black">Hello from the 70's</P>
</BODY>
</HTML>
