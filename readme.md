# API Doc ( Niobio )

## Criação de Usuário
Request Type: 

    POST

Url: 

    /niobio/user/add

Params: 

        'username',
        'email',
        'password'

Response:

         'id', ( O id do usuário )
         'token', ( Token para acessos futuros )
         'status = 1' ( status 1 = Ok, status 0 = fail )

## Autenticação de usuário
Request Type: 

    POST

URL:

    /niobio/user/auth

Params:

    'username',
    'password'

Response:

    'id', ( O id do usuário )
    'token', ( Token para acessos futuros )
    'status = 1' ( status 1 = Ok, status 0 = fail )

## Obtendo Notas
Request Type: 

    POST

URL: 

    /niobio/notas/get

Params: 

        'token'
        'cnpj' CNPJ do emitente das notas
        'dt_ini' Data inicial ( Padrão 'yyyymmdd' tudo junto  )
        'dt_fin' Data final ( Padrão 'yyyymmdd' tudo junto  ) 

Response: 

    Objeto Json

## Obtendo Regras
Request Type: 

    POST

URL: 

    /niobio/rules/t2/get

Params: 

        'token'
        'cnpj' CNPJ do emitente das notas
        'dt_ini' Data inicial ( Padrão 'yyyymmdd' tudo junto )
        'dt_fin' Data final ( Padrão 'yyyymmdd' tudo junto )
        'emit_cnpj'
        'det_prod_cfop'
        'det_imposto_icms_icms_cst'
        'ide_cuf'
        'user_id'
        'det_prod_cean'

Response: 

    Objeto Json

## Registrando ou Atualizando(Sobrepondo) Regra na T2
Request Type: 

    POST

URL:

    niobio/rule/add/t2

Params:

    token ,
    info: { 
         rule_id ( id da regra [caso a regra já exista, caso contrário enviar em branco] ),
         rule_owner_id ( id do usuário que cadastrou a regra [ caso a regra já exista, caso contrario enviar em branco ] ) ,
         user_id ( id do usuário que está cadastrando a regra )
     },
     data: { 
        'user_id' ,
        'ide_demi' ,
        'ide_dhemi' ,
        'ide_dhsaient' ,
        'ide_hsaient' ,
        'det_imposto_pis_pisaliq_cst' ,
        'det_imposto_cofins_pisaliq_cst' ,
        'natureza' ,
        'det_prod_cean' ,
        'det_prod_ceantrib' ,
        'ide_cuf' ,
        'emit_cnpj' ,
        'infprot_chnfe' ,
        'det_prod_xprod' ,
        'det_prod_cprod' ,
        'sprod' ,
        'det_prod_ncm' ,
        'det_prod_cfop' ,
        'det_prod_qtrib' ,
        'det_prod_utrib' ,
        'det_prod_vuncom' ,
        'valor_mercadoria' ,
        'det_imposto_icms_icms_vbc' ,
        'det_imposto_icms_icms_picms' ,
        'det_imposto_icms_icms_cst' ,
        'det_imposto_icms_icmsst_vbcstret' ,'0.00',
        'det_imposto_icms_icmsst_cst' ,
        'valor_icms' ,
        'det_imposto_ipi_ipitrib_vipi' ,
        'total_icmstot_vfrete' ,
        'total_icmstot_vdesc' ,
        'total_icmstot_vseg' ,
        'total_icmstot_voutro' ,
        'cfop_entrada' ,
        'valor_icmsst' ,
        'credito_glosa_antecipacao' ,
        'valor_devolucao' ,
        'aliq_interna_icms' ,
        'reducao_base_calculo' ,
        'valor_pauta' ,
        'mva' ,
        'reducao_base_icmsst' ,
        'base_calculo_icmsst' ,
        'quantidade_em_kgun' ,
        'base_calculo_icmsst_pauta' ,
        'antecipacao_parcial_normal' ,
        'icmsst_recolher_normal' ,
        'antecipacao_parcial_atst' ,
        'icmsst_recolher_atst' ,
        'antecipacao_parcial_simples' ,
        'antecipacao_parcial_desconto_simples' ,
        'icmsst_recolher_simples'
      } 

Response: 

    http 200 code


## Registrando Regra na T3
Request Type: 

    POST

URL:

    niobio/rule/add/t3

Params:

    token,
    info: { 
         rule_id ( id da regra [caso a regra já exista, caso contrário enviar em branco] ),
         user_id ( id do usuário que está cadastrando a regra )
     },
     data: { 
        'user_id' ,
        'ide_demi' ,
        'ide_dhemi' ,
        'ide_dhsaient' ,
        'ide_hsaient' ,
        'det_imposto_pis_pisaliq_cst' ,
        'det_imposto_cofins_pisaliq_cst' ,
        'natureza' ,
        'det_prod_cean' ,
        'det_prod_ceantrib' ,
        'ide_cuf' ,
        'emit_cnpj' ,
        'infprot_chnfe' ,
        'det_prod_xprod' ,
        'det_prod_cprod' ,
        'sprod' ,
        'det_prod_ncm' ,
        'det_prod_cfop' ,
        'det_prod_qtrib' ,
        'det_prod_utrib' ,
        'det_prod_vuncom' ,
        'valor_mercadoria' ,
        'det_imposto_icms_icms_vbc' ,
        'det_imposto_icms_icms_picms' ,
        'det_imposto_icms_icms_cst' ,
        'det_imposto_icms_icmsst_vbcstret' ,'0.00',
        'det_imposto_icms_icmsst_cst' ,
        'valor_icms' ,
        'det_imposto_ipi_ipitrib_vipi' ,
        'total_icmstot_vfrete' ,
        'total_icmstot_vdesc' ,
        'total_icmstot_vseg' ,
        'total_icmstot_voutro' ,
        'cfop_entrada' ,
        'valor_icmsst' ,
        'credito_glosa_antecipacao' ,
        'valor_devolucao' ,
        'aliq_interna_icms' ,
        'reducao_base_calculo' ,
        'valor_pauta' ,
        'mva' ,
        'reducao_base_icmsst' ,
        'base_calculo_icmsst' ,
        'quantidade_em_kgun' ,
        'base_calculo_icmsst_pauta' ,
        'antecipacao_parcial_normal' ,
        'icmsst_recolher_normal' ,
        'antecipacao_parcial_atst' ,
        'icmsst_recolher_atst' ,
        'antecipacao_parcial_simples' ,
        'antecipacao_parcial_desconto_simples' ,
        'icmsst_recolher_simples'
      } 

Response: 

    http 200 code

## Obtendo Todas as notificações
Request Type: 

    GET

Url:

    'niobio/feed/all'

Params:

    token

Response:

    Json Object

## Marcando Notificações como lidas
Request Type: 

    POST

Url:

    'niobio/feed/att'

Params:

    'token'
    'id' ( Id da notificação )

Response:

    http code 200

## Obtendo Notificações novas ( não lidas )
Request Type: 

    GET

Url: 

    'niobio/feed/new'

Params:
    
    'token'

Response:

    Json Object

## Deletando Notificações
Request Type: 

    POST

Url:

    'niobio/feed/del'

Params:

    'token'
    'id' ( id da notificação )

Response:

    http code 200

## Obtendo Informações do Sped Contribuição

Request Type:

    POST

Url:

    'niobio/contribuicao/get'

Params:
        'token'
        'cnpj' CNPJ do emitente das notas
        'dt_ini' Data inicial ( Padrão 'yyyymmdd' tudo junto )
        'dt_fin' Data final ( Padrão 'yyyymmdd' tudo junto )

Response:

    Json Object

## Obtendo Informações do Sped Fiscal

Request Type:

    POST

Url:

    'niobio/fiscal/get'

Params:
    'token'
    'cnpj' CNPJ do emitente das notas
    'dt_ini' Data inicial ( Padrão 'yyyymmdd' tudo junto )
    'dt_fin' Data final ( Padrão 'yyyymmdd' tudo junto )

Response:

    Json Object
