SELECT so.*, te.te_nombre as "tema", se.se_nombre as "sexo", et.et_nombre as "etnia", na.ne_nombre as "nivel", adm.adm_nombre as "administrador" FROM tblsondeo as so 
INNER JOIN tbltema as te
ON so.te_codigo = te.te_codigo
INNER JOIN tblsexo as se
ON so.se_codigo = se.se_codigo
INNER JOIN tbletnia as et
ON so.et_codigo = et.et_codigo
INNER JOIN tblnivel_educativo as na
ON so.na_codigo = na.ne_codigo
INNER JOIN tbladministrador as adm
ON so.adm_codigo = adm.adm_codigo