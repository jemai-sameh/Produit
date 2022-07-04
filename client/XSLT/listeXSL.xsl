<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
                xmlns:xs="http://www.w3.org/2001/XMLSchema"
                exclude-result-prefixes="xs"
                version="1.0">
    
    <xsl:template match="/">
        <table border="1" width="80%" class="table table-striped">
            <tr>
                <th colspan="3">Categorie</th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Nom Categorie</th>
                <th>Produits</th>
            </tr>
            <xsl:apply-templates select="Categories/Categorie"/>
        </table>
    </xsl:template>
    
    
    <xsl:template match="Categories/Categorie">
        <tr>
            <td><xsl:value-of select="@Id"/></td>
            <td><xsl:value-of select="NomCategorie"/></td>
            <td>
                <table border="1" class="table table-striped">
                    <tr>
                        <th>Code</th>
                        <th>Nom</th>
                        <th>Prix</th>
                        <th>Quantite</th>
                        <th>Image</th>
                        <th>Description</th>
                    </tr>                    
                    <xsl:apply-templates select="Categories/Categorie/Produits/Produit"/>
                </table>
            </td>
        </tr>
    </xsl:template>
    <xsl:template match="Categories/Categorie/Produits/Produit">
        <tr>
            <td><xsl:value-of select="@Code"/></td>
            <td><xsl:value-of select="Nom"/></td>
            <td><xsl:value-of select="Prix"/></td>
            <td><xsl:value-of select="Quantite"/></td>
            <td><xsl:value-of select="Img"/></td>
            <td><xsl:value-of select="Description"/></td>

        </tr>

    </xsl:template>
    
    
</xsl:stylesheet>