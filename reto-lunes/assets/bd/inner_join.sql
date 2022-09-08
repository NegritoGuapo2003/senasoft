
SELECT 
    so.*, 
    te.te_nombre as "tema",
    se.se_nombre as "sexo", 
    et.et_nombre as "etnia",
    na.ne_nombre as "nivel",
    adm.adm_nombre as "administrador" 

FROM 
    tblsondeo as so  INNER JOIN tbltema as te ON so.te_codigo = te.te_codigo
    INNER JOIN tblsexo as se ON so.se_codigo = se.se_codigo
    INNER JOIN tbletnia as et ON so.et_codigo = et.et_codigo
    INNER JOIN tblnivel_educativo as na ON so.na_codigo = na.ne_codigo
    INNER JOIN tbladministrador as adm ON so.adm_codigo = adm.adm_codigo


-- select de ciudadano
SELECT 
    ci.*,
    se.se_nombre as "sexo",
    mun.mun_nombre as "municipio",
    bv.bv_nombre as "barrio vereda",
    et.et_nombre as "etnia",
    con.con_nombre as "condicion",
    ne.ne_nombre as "nivel educativo",
    re.re_nombre as "regimen"

FROM 
    tblciudadano as ci  
    INNER JOIN tblsexo as se ON ci.se_codigo = se.se_codigo
    INNER JOIN tblmunicipio as mun ON ci.mun_codigo = mun.mun_codigo
    INNER JOIN tblbarrio_vereda as bv ON ci.bv_codigo = bv.bv_codigo
    INNER JOIN tbletnia as et ON ci.et_codigo = et.et_codigo
    INNER JOIN tblcondicion as con ON ci.con_codigo = con.con_codigo
    INNER JOIN tblnivel_educativo as ne ON ci.ne_codigo = ne.ne_codigo
    INNER JOIN tblregimen as re ON ci.reg_codigo = re.re_codigo;

-- select de preguntas segun sondeo
SELECT 
    
    *

FROM

    tblsondeo_pregunta 

WHERE so_codigo = 

-- select de preguntas segun sondeo
SELECT 

    sp.pr_codigo as "codigo pregunta",
    sp.so_codigo as "codigo sondeo",
    pr.pr_nombre as "pregunta"

FROM 

    tblsondeo_pregunta as sp  
    INNER JOIN tblpreguntas as pr ON pr.pr_codigo = sp.pr_codigo
    WHERE sp.pr_codigo = variable AND sp.so_codigo = variable

