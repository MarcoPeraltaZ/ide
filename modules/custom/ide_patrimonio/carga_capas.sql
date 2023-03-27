DROP TABLE IF EXISTS  public.capas;
create table if not exists capas
(
    id serial not null
        constraint capas_pk
            primary key,
    nombre varchar not null,
    descripcion text default ''::text not null,
    imagen varchar default ''::character varying not null,
    icono varchar default ''::character varying not null,
    visor varchar default ''::character varying not null,
    visor_satelital varchar default ''::character varying not null,
    extent varchar,
    zoom varchar,
    in_app boolean default true
);

--alter table capas owner to postgres;

create unique index if not exists capas_id_uindex
    on capas (id);

create unique index if not exists capas_nombre_uindex
    on capas (nombre);

INSERT INTO public.capas (id, nombre, descripcion, imagen, icono, visor, visor_satelital, extent, zoom, in_app)
VALUES (1, 'Ax: Encuentro de las Culturas Indígenas y Afrodescendiente',
        'Obras ganadoras del primer, segundo y tercer lugar y menciones honrosas de las versiones 2017 y 2018 del Ax: Encuentro de las Culturas Indígenas y Afrodescendiente',
        'encuentro_de_culturas.png', 'ic_encuentro_culturas.png',
        'https://geoportalcmn.cl/portal/apps/Embed/index.html?webmap=02b864cd9072432a9f689b7b6b401e78&extent=-74.2959,-40.5896,-72.0396,-39.6127&zoom=true&previewImage=false&scale=true&disable_scroll=true&theme=light',
        'https://geoportalcmn.cl/portal/apps/Embed/index.html?webmap=fc9206968ee242da8f6db3b8aa46a650', '-74.2959,-40.5896,-72.0396,-39.6127', '18', false);

INSERT INTO public.capas (id, nombre, descripcion, imagen, icono, visor, visor_satelital, extent, zoom, in_app)
VALUES (2, 'Biblioteca Nacional de Chile y Sistema Nacional de Bibliotecas Públicas',
        'Identificación georreferenciada de puntos, donde cada uno de estos representa la localización de un recinto bibliotecario y su tipo',
        'biblioteca_nacional.png', 'ic_biblioteca_nac.png',
        'https://geoportalcmn.cl/portal/apps/Embed/index.html?webmap=f155a0b2247d4596bd405f43051bcef0&extent=-73.3042,-35.6777,-68.7915,-33.5761&zoom=true&previewImage=false&scale=true&disable_scroll=true&theme=light',
        'https://geoportalcmn.cl/portal/apps/Embed/index.html?webmap=df84d9d4be5840978924c77ef99efb52', '-73.3042,-35.6777,-68.7915,-33.5761', '18', true);

INSERT INTO public.capas (id, nombre, descripcion, imagen, icono, visor, visor_satelital, extent, zoom, in_app)
VALUES (3, 'Elementos de Patrimonio Cultural Inmaterial',
        'Zonas asociadas a Elementos de Patrimonio Cultural Inmaterial que se encuentran en el Inventario de Patrimonio y que forman parte del proceso de salvaguardia del Patrimonio Cultural Inmaterial',
        'elementos_inventario_patrimonio.png', 'ic_elementos_inventario.png',
        'https://geoportalcmn.cl/portal/apps/Embed/index.html?webmap=5e0dab02cf16487d9bd3a7ee7854625e&extent=-70.6506,-21.0262,-68.3943,-19.8294&zoom=true&previewImage=false&scale=true&disable_scroll=true&theme=light',
        'https://geoportalcmn.cl/portal/apps/Embed/index.html?webmap=b85786b334724024a83975ce4f6b7284', '-70.6506,-21.0262,-68.3943,-19.8294', '13', false);

INSERT INTO public.capas (id, nombre, descripcion, imagen, icono, visor, visor_satelital, extent, zoom, in_app)
VALUES (4, 'Iglesias Escuela Chilota',
        'Iglesias de la Escuela Chilota en madera, ejemplo excepcional de arquitectura religiosa en América Latina',
        'iglesias_escuela_chilota.png', 'ic_iglesias_escuela_chilota.png',
        'https://geoportalcmn.cl/portal/apps/Embed/index.html?webmap=cf6a05051d3b4483896b46be4aa888f1&extent=-74.6477,-43.0855,-72.3914,-42.1457&zoom=true&previewImage=false&scale=true&disable_scroll=true&theme=light',
        'https://geoportalcmn.cl/portal/apps/Embed/index.html?webmap=85abfdcfc75247af8b6f863a3d1683c6', '-74.6477,-43.0855,-72.3914,-42.1457', '18', true);

INSERT INTO public.capas (id, nombre, descripcion, imagen, icono, visor, visor_satelital, extent, zoom, in_app)
VALUES (9, 'Componentes de 6 Sitios de Patrimonio Mundial',
        'Sitios inscritos por Chile en la Lista de Patrimonio Mundial, según la Convención sobre la Protección del Patrimonio Mundial, Cultural y Natural, Unesco 1972.',
        'puntos_sitios_patrimonio_mundial.jpg', 'ic_patrimonio_mundial.png',
        'https://geoportalcmn.cl/portal/apps/Embed/index.html?webmap=fd0a5ebe7bd840ac8adeb51734f214bc&extent=-68.471,-23.0458,-67.9069,-22.7517&zoom=true&previewImage=false&scale=true&disable_scroll=true&theme=light',
        'https://geoportalcmn.cl/portal/apps/Embed/index.html?webmap=c883c24c7b334fce828b9b1e181db3ed', '-68.471,-23.0458,-67.9069,-22.7517', '14', false);

INSERT INTO public.capas (id, nombre, descripcion, imagen, icono, visor, visor_satelital, extent, zoom, in_app)
VALUES (10, 'Registro de Museos de Chile',
        'Identificación georreferenciada de puntos que almacena la ubicación de museos y sus datos asociados',
        'registro_de_museos.png', 'ic_registro_museos_chile.png',
        'https://geoportalcmn.cl/portal/apps/Embed/index.html?webmap=159b4effb60a497fb8119051a28f8d01&extent=-74.4031,-38.3692,-69.8904,-36.339&zoom=true&previewImage=false&scale=true&disable_scroll=true&theme=light',
        'https://geoportalcmn.cl/portal/apps/Embed/index.html?webmap=9bdf3b72fc1d4c2eb47adb6092acba0e', '-74.4031,-38.3692,-69.8904,-36.339', '18', true);

INSERT INTO public.capas (id, nombre, descripcion, imagen, icono, visor, visor_satelital, extent, zoom, in_app)
VALUES (11, 'Sello Artesanía Indígena',
        'Obras ganadoras de las versiones 2016, 2017, 2018 y 2019 y las menciones honrosas del año 2019 del Sello Artesanía Indígena y sus creadoras y creadores',
        'sello_artesania_indigena.png', 'ic_sello_artesania.png',
        'https://geoportalcmn.cl/portal/apps/Embed/index.html?webmap=c799d29633534bd786f5ae4025c30ca8&extent=-73.5916,-39.3455,-71.3353,-38.3508&zoom=true&previewImage=false&scale=true&disable_scroll=true&theme=light',
        'https://geoportalcmn.cl/portal/apps/Embed/index.html?webmap=aa3c117d7b1149218e6bf4c639271dc5', '-73.5916,-39.3455,-71.3353,-38.3508', '18', false);

INSERT INTO public.capas (id, nombre, descripcion, imagen, icono, visor, visor_satelital, extent, zoom, in_app)
VALUES (12, 'Sistema Nacional de Archivos',
        'Identificación georreferenciada de puntos que almacena la ubicación de archivos y sus datos asociados',
        'sistema_nacional_archivos.png', 'ic_sist_nac_archivos.png',
        'https://geoportalcmn.cl/portal/apps/Embed/index.html?webmap=f5629b99f3404facacbf833a11c71cde&extent=-71.1663,-33.7384,-70.0381,-33.2057&zoom=true&previewImage=false&scale=true&disable_scroll=true&theme=light',
        'https://geoportalcmn.cl/portal/apps/Embed/index.html?webmap=e1d100ed210d487bbf2a2f6f74a9821c', '-71.1663,-33.7384,-70.0381,-33.2057', '18', true);

INSERT INTO public.capas (id, nombre, descripcion, imagen, icono, visor, visor_satelital, extent, zoom, in_app)
VALUES (13, 'Tesoros Humanos Vivos',
        'Reconocimiento que el Estado chileno otorga a comunidades, grupos y personas, distinguidos por los aportes realizados a la salvaguardia y al cultivo de elementos del Inventario de Patrimonio Cultural Inmaterial en Chile',
        'tesoros_humanos_vivos.png', 'ic_tesoros_humanos.png',
        'https://geoportalcmn.cl/portal/apps/Embed/index.html?webmap=a08a67774cbc47fcbb5b9b9dea6dfe57&extent=-71.8626,-34.1636,-69.6063,-33.1002&zoom=true&previewImage=false&scale=true&disable_scroll=true&theme=light',
        'https://geoportalcmn.cl/portal/apps/Embed/index.html?webmap=8c441d2037ae4b0aae545079b603116f', '-71.8626,-34.1636,-69.6063,-33.1002', '18', false);

INSERT INTO public.capas (id, nombre, descripcion, imagen, icono, visor, visor_satelital, extent, zoom, in_app)
VALUES (14, 'Santuarios de la Naturaleza',
        'Monumentos Nacionales Inmuebles declarados en la categoría de Santuarios de la Naturaleza, según la Ley 17.288 sobre Monumentos Nacionales.',
        'santuarios_de_la_naturaleza.jpg', 'ic_santuarios_de_la_naturaleza.png',
        'https://geoportalcmn.cl/portal/apps/Embed/index.html?webmap=f75e8a8fafc1434d9cd9c63b2eca37de&extent=-72.3161,-34.1715,-68.9433,-32.6885&zoom=true&previewImage=false&scale=true&disable_scroll=true&theme=light',
        'https://geoportalcmn.cl/portal/apps/Embed/index.html?webmap=b0a49fbcf96e437fa864fb197fc403ee', '-74.5336,-36.0997,-67.7879,-33.1762', '18', true);

INSERT INTO public.capas (id, nombre, descripcion, imagen, icono, visor, visor_satelital, extent, zoom, in_app)
VALUES (15, 'Monumento Histórico',
        'Monumentos Nacionales Inmuebles declarados en la categoría de Monumentos Históricos, según la Ley N°17.288 sobre Monumentos Nacionales.',
        'monumento_historico.png', 'ic_monumento_historico.png',
        'https://geoportalcmn.cl/portal/apps/Embed/index.html?webmap=f6158a35fef840a9838b92a33da5a21c&amp;extent=-72.3161,-34.1715,-68.9433,-32.68852&zoom=true&previewImage=false&scale=true&disable_scroll=true&theme=light',
        'https://geoportalcmn.cl/portal/apps/Embed/index.html?webmap=c624e30a1e864dba8b8c7ece3a21727c', '-74.5336,-36.0997,-67.7879,-33.1762', '18', true);

INSERT INTO public.capas (id, nombre, descripcion, imagen, icono, visor, visor_satelital, extent, zoom, in_app)
VALUES (16, 'Zona Típica o Pintoresca',
        'Monumentos Nacionales Inmuebles declarados en la categoría de Zonas Típicas o Pintoresca, según la Ley N°17.288 sobre Monumentos Nacionales.',
        'zona_tipica.jpg', 'ic_zona_tipica.png',
        'https://geoportalcmn.cl/portal/apps/Embed/index.html?webmap=1220d9d60afe4b7c858a8c2717b695e8&amp;extent=-72.3161,-34.1715,-68.9433,-32.6885&zoom=true&previewImage=false&scale=true&disable_scroll=true&theme=light',
        'https://geoportalcmn.cl/portal/apps/Embed/index.html?webmap=72558a10cbac4ce0aba41049b32d4ac7', '74.5336,-36.0997,-67.7879,-33.1762', '18', true);


DROP TABLE IF EXISTS  public.patrimonios;
create table patrimonios
(
    id serial not null,
    capa varchar not null,
    capa_id int not null,
    tipo varchar not null,
    name varchar ,
    region varchar not null,
    provincia varchar not null,
    comuna varchar not null,
    longitude varchar not null,
    latitude varchar not null,
    url text,
    centroide geometry not null
);

Insert into  public.patrimonios (capa, capa_id, tipo, name, region, provincia, comuna, longitude, latitude, url, centroide)
select
    'Ax: Encuentro de las Culturas Indígenas y Afrodescendiente' as capa,
    1 as capa_id,
    st_geometrytype(geom)                                        as tipo,
    nombre as name,
    region,
    provincia,
    comuna,
    ST_X(geom)                                                   as longitude,
    st_y(geom)                                                   as latitude,
    imagen                                                       as url,
    geom                                                         as centroide
from "Ax_Encuentro_de_las_Culturas_Indígenas_y_Afrodescendiente"
UNION
select 'Biblioteca Nacional de Chile y Sistema Nacional de Bibliotecas Públicas' as capa,
       2 as capa_id,
       st_geometrytype(geom)                                                     as tipo,
       concat(tipo_recin, ' ' , codigo ,' ' ,recinto)                           as name,
       region,
       provincia,
       comuna,
       ST_X(geom)                                                                as longitude,
       st_y(geom)                                                                as latitude,
       imagen                                                                    as url,
       geom                                                                      as centroide
from "Biblioteca_Nacional_de_Chile_y_Sistema_de_Bibliotecas_Públicas"
UNION
select 'Elementos de Patrimonio Cultural Inmaterial' as capa,
       3 as capa_id,
       st_geometrytype(geom)                                          as tipo,
       nom_elemen                                                     as name,
       region,
       provincia,
       comuna,
       ST_X(ST_Centroid(geom))                                        as longitude,
       st_y(ST_Centroid(geom))                                        as latitude,
       imagen                                                         as url,
       ST_Centroid(geom)                                              as centroide
from "Elementos_en_el_Inventario_de_Patrimonio_Cultural_Inmaterial"
UNION
select 'Iglesias Escuela Chilota' as capa,
       4 as capa_id,
       st_geometrytype(geom)      as tipo,
       nombre_of                  as name,
       region,
       provincia,
       comuna,
       ST_X(geom)                 as longitude,
       st_y(geom)                 as latitude,
       imagen                     as url,
       geom                       as centroide
from "Iglesias_Escuela_Chilota"
UNION
select 'Sitios de Patrimonio Mundial' as capa,
       9 as capa_id,
       st_geometrytype(geom)                 as tipo,
       concat(nombre_spm, ' - ',nombre)  as name,
       region,
       provincia,
       comuna,
       ST_X(geom)                            as longitude,
       st_y(geom)                            as latitude,
       imagen                                as url,
       geom                                  as centroide
from "Puntos_Sitios_de_Patrimonio_Mundial"
UNION
select 'Registro de Museos de Chile' as capa,
       10 as capa_id,
       st_geometrytype(geom)         as tipo,
       nombre as name,
       region,
       provincia,
       comuna,
       ST_X(geom)                    as longitude,
       st_y(geom)                    as latitude,
       imagen                        as url,
       geom                          as centroide
from "Registro_de_Museos_de_Chile"
UNION
select 'Sello Artesanía Indígena' as capa,
       11 as capa_id,
       st_geometrytype(geom)      as tipo,
       nombre as name,
       region,
       provincia,
       comuna,
       ST_X(geom)                 as longitude,
       st_y(geom)                 as latitude,
       imagen                     as url,
       geom                       as centroide
from "Sello_Artesania_Indigena"
UNION
select 'Sistema Nacional de Archivos' as capa,
       12 as capa_id,
       st_geometrytype(geom)          as tipo,
       nombre as name,
       region,
       provincia,
       comuna,
       ST_X(geom)                     as longitude,
       st_y(geom)                     as latitude,
       imagen                         as url,
       geom                           as centroide
from "Sistema_Nacional_de_Archivos"
UNION
select 'Tesoros Humanos Vivos' as capa,
       13 as capa_id,
       st_geometrytype(geom)   as tipo,
       nombrethv               as name,
       region,
       provincia,
       comuna,
       ST_X(geom)              as longitude,
       st_y(geom)              as latitude,
       imagen                  as url,
       geom                    as centroide
from "Tesoros_Humanos_Vivos"
UNION
select 'Santuarios de la Naturaleza' as capa,
       14 as capa_id,
       st_geometrytype(geom)          as tipo,
       nombre as name,
       region,
       provincia,
       comuna,
       ST_X(ST_Centroid(geom))        as longitude,
       st_y(ST_Centroid(geom))        as latitude,
       imagen                         as url,
       ST_Centroid(geom)              as centroide
from "Puntos_Monumentos_Nacionales"
where categoria = 'Santuario de la Naturaleza'
UNION
select 'Monumento Histórico' as capa,
       15 as capa_id,
       st_geometrytype(geom)          as tipo,
       nombre as name,
       region,
       provincia,
       comuna,
       ST_X(ST_Centroid(geom))        as longitude,
       st_y(ST_Centroid(geom))        as latitude,
       imagen                         as url,
       ST_Centroid(geom)              as centroide
from "Puntos_Monumentos_Nacionales"
where categoria = 'Monumento Histórico'
UNION
select 'Zona Típica o Pintoresca' as capa,
       16 as capa_id,
       st_geometrytype(geom)          as tipo,
       nombre as name,
       region,
       provincia,
       comuna,
       ST_X(ST_Centroid(geom))        as longitude,
       st_y(ST_Centroid(geom))        as latitude,
       imagen                         as url,
       ST_Centroid(geom)              as centroide
from "Puntos_Monumentos_Nacionales"
where categoria = 'Zona Típica o Pintoresca';

select *
from public.patrimonios;

select capa, count(*) as LatLonNull
from public.patrimonios
where latitude is null
   or longitude is null
group by capa;

select capa, count(*) as NombreNull
from public.patrimonios
where name is null
   or name like ''
group by capa;


select capa, count(*) as ImagenNull
from public.patrimonios
where url is null
   or url is null
group by capa;

select count(*) as ImagenNull
from public.patrimonios
where url is null
   or url is null;

select capa, count(*) as cantidad
from public.patrimonios
group by capa
order by capa;
