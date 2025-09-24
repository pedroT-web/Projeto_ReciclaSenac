SELECT 
    cad_peso.id, 
    cad_peso.peso,
    cad_peso.data, 
    tb_func.nome_do_funcionario, 
    tb_func.id_funcionario, 
    tb_mate.id_material, 
    tb_mate.nome_material 
FROM 
    cadastro_de_peso AS cad_peso 
INNER JOIN 
    tb_funcionarios AS tb_func 
    ON tb_func.id_funcionario = cad_peso.id_funcionarios 
INNER JOIN 
    materiais AS tb_mate 
    ON tb_mate.id_material = cad_peso.id_material 
WHERE 
    data between :dataInicio AND :dataFim