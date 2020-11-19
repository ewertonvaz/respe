# List of relations
 Schema |           Name            | Type  |  Owner
--------+---------------------------+-------+----------
 public | respe_busca               | table | postgres
 public | respe_cabecalho_relatorio | table | postgres
 public | respe_cargos              | table | postgres
 public | respe_exclvisita          | table | postgres
 public | respe_exclvisitante       | table | postgres
 public | respe_localidades         | table | postgres
 public | respe_setores             | table | postgres
 public | respe_tipo_usuarios       | table | postgres
 public | respe_usuarios            | table | postgres
 public | respe_visitantes          | table | postgres
 public | respe_visitas             | table | postgres

## Table "public.respe_busca"
 Column |       Type        | Collation | Nullable | Default
--------+-------------------+-----------+----------+---------
 campos | character varying |           |          |NOME, CPF

## Table "public.respe_cabecalho_relatorio"
  Column  |       Type        | Collation | Nullable | Default
----------+-------------------+-----------+----------+---------
 titulo_1 | character varying |           |          |JUSTIÇA FEDERAL - SEÇÃO JUDICIÁRIA DO PARÁ
 titulo_2 | character varying |           |          |

## Table "public.respe_cargos"
   Column    |       Type        | Collation | Nullable | Default
-------------+-------------------+-----------+----------+---------
 tipo_cargo  | character varying |           |          |ANALISTA JUDICIÁRIO, TÉCNICO JUDICIÁRIO, Prestador de Serviços, Diretor
 sigla_cargo | character varying |           |          |AJ, TJ, PS, DIR

## Table "public.respe_exclvisita"
     Column     |       Type        | Collation | Nullable | Default
----------------+-------------------+-----------+----------+---------
 nome           | character varying |           |          |KRATOS
 cpf            | character varying |           |          |
 setor_visitado | character varying |           |          |NUASG
 data           | character varying |           |          |10/8/2019
 hora           | character varying |           |          |11:47
 mat_serv       | character varying |           |          |CSTI
 nome_gue       | character varying |           |          |CSTI
 data_excl      | character varying |           |          |08/10/2019
 hora_excl      | character varying |           |          |14:50

## Table "public.respe_exclvisitante"
  Column   |       Type        | Collation | Nullable | Default
-----------+-------------------+-----------+----------+---------
 nome      | character varying |           |          |TESTE
 cpf       | character varying |           |          |
 mat_serv  | character varying |           |          |CSTI
 nome_gue  | character varying |           |          |CSTI
 data_excl | character varying |           |          |08/10/2019
 hora_excl | character varying |           |          |14:47

## Table "public.respe_localidades"
   Column   |       Type        | Collation | Nullable | Default 
------------+-------------------+-----------+----------+---------
 localidade | character varying |           |          |Belém      
 sigla_uf   | character varying |           |          |PA

## Table "public.respe_setores"
   Column    |       Type        | Collation | Nullable | Default
-------------+-------------------+-----------+----------+---------
 sigla_setor | character varying |           |          |PROTOCOLO
 nivel_um    | character varying |           |          |GAB
 nivel_dois  | character varying |           |          |TRE/AP
 nivel_tres  | character varying |           |          |

## Table "public.respe_tipo_usuarios"
     Column     |       Type        | Collation | Nullable | Default
----------------+-------------------+-----------+----------+---------
 tipo_usu       | character varying |           |          |MASTER, COMUM

## Table "public.respe_usuarios"
   Column    |       Type        | Collation | Nullable |                  Default
-------------+-------------------+-----------+----------+-------------------------------------------
 n           | integer           |           | not null | nextval('respe_usuarios_n_seq'::regclass)
 mat_serv    | character varying |           |          | CSTI, PA39PS
 nom_serv    | character varying |           |          | CSTI, JOSENILDA DA SILVA RODRIGUES
 nome_gue    | character varying |           |          | CSTI, JOSENILDA
 cargo       | character varying |           |          | Prestador de Serviços, Prestador de Serviços
 funcao      | character varying |           |          | , RECEPCIONISTA
 cpf         | character varying |           |          |
 setor       | character varying |           |          | NUTEC, SESEG
 senha       | character varying |           |          | 4fe8854e37a19929e8816aea80347f1b, 8f6704b4620f44a511f6132ee54a38d5
 tipo_usu    | character varying |           |          | MASTER, COMUM
 reg_entpess | character varying |           |          | 1, 1
 reg_saipess | character varying |           |          | 1, 1
 cons_visdia | character varying |           |          | 1, 1
 cons_visper | character varying |           |          | 1, 1
 consvis     | character varying |           |          | 1, 1
 exc_visrea  | character varying |           |          | 1, 0
 exc_vis     | character varying |           |          | 1, 0

## Table "public.respe_visitantes"
   Column   |       Type        | Collation | Nullable |                   Default
------------+-------------------+-----------+----------+---------------------------------------------
 n          | integer           |           | not null | nextval('respe_visitantes_n_seq'::regclass)
 nome       | character varying |           |          | XICARA DA SILVA, ALEXANDRE MAGNO RODRIGUES BRANCO
 rg         | character varying |           |          | , 1506524800 					
 orgao_exp  | character varying |           |          | , CREA
 cpf        | character varying |           |          | 111.111.111-11, 
 endereco   | character varying |           |          |
 telefone   | character varying |           |          |
 localidade | character varying |           |          | Belém, 
 uf         | character varying |           |          |

## Table "public.respe_visitas"
     Column     |       Type        | Collation | Nullable |                 Default
----------------+-------------------+-----------+----------+------------------------------------------
 n              | integer           |           | not null | nextval('respe_visitas_n_seq'::regclass)
 nome           | character varying |           |          | KRATOS, FULANO DE TAL, ALEXANDRE MAGNO RODRIGUES BRANCO
 rg             | character varying |           |          | , 555555555, 1506524800
 orgao_exp      | character varying |           |          | , SSS, CREA, 
 cpf            | character varying |           |          | , 444.444.444-44, 
 endereco       | character varying |           |          | , , 
 telefone       | character varying |           |          | , ,
 localidade     | character varying |           |          | , ,
 uf             | character varying |           |          | , ,
 setor_visitado | character varying |           |          | NUTEC, PROTOCOLO, 12ª VARA
 assunto        | character varying |           |          | Visita, LOUI, CONSULTA
 hora           | character varying |           |          | 17:10, 14:51, 14:51
 data           | date              |           |          | 2019-09-19, 2019-09-25, 2019-10-08
 hora_saida     | character varying |           |          | 10:26, 14:41, 17:03
 data_saida     | date              |           |          | 2019-09-20, 2019-10-03, 2019-10-08
 visita_entrou  | character varying |           |          | ENTROU, ENTROU, ENTROU
 visita_saiu    | character varying |           |          | SAIU, SAIU, SAIU