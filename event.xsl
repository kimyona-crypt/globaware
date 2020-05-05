<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
  
<html>

<body>
  
    
	<h2 style="font-size:46px;color:green">The records of the events organised</h2>
	<table border="1">
    <tr bgcolor="#9acd32">
      <th style="text-align:left;font-size:36px">Event name</th>
      <th style="text-align:left;font-size:36px">Date</th>
      <th style="text-align:left;font-size:36px">Organiser</th>
      <th style="text-align:left;font-size:36px">Participants</th>
    </tr>
    <xsl:for-each select="event/data">
    <tr>
      <td style="font-size:28px"><xsl:value-of select="event_name"/></td>
      <td style="font-size:28px"><xsl:value-of select="date"/></td>
      <td style="font-size:28px"><xsl:value-of select="organiser"/></td>
      <td style="font-size:28px"><xsl:value-of select="no_participants"/></td>
    </tr>

</xsl:for-each>
</table>
<button  style="color:white; font-size:28px; margin-top:5%;border-radius:10%;width:17%;height:10vh; margin-left:50%; background-color:green" onclick="myfunc()" class="btn">Supporter</button>
  <script>
       function myfunc(){
       location.assign('supporter.php');
        }
  </script>
</body>
</html>
</xsl:template>
</xsl:stylesheet>
