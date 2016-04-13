<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
	<html>
		<body>
			<h1>Tutor Registry</h1>
			<xsl:for-each select="tutors/tutor">
				<h2><xsl:for-each select="firstname" /><xsl:for-each select="lastname" /></h2>
				<h3>Courses</h3>
				<ul>
					<xsl:for-each select="tutors/tutor/courses/course">
						<li><xsl:value-of select="name" />(<xsl:value-of select="number" />)</li>
					</xsl:for-each>
				</ul>
				<h3>Contact Info</h3>
				<label>Email: </label><xsl:value-of select="email" />
				<label>Phone: </label><xsl:value-of select="phone" />
				<label>Address: </label><xsl:value-of select="address" />
			</xsl:for-each>
		</body>
	</html>
</xsl:template>

</xsl:stylesheet>