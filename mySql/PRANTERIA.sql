create database pranteria;
use pranteria;

create table plantas (
	id int unsigned not null auto_increment primary key,
    nomePessoal varchar(45) not null,
    nomeCientifico varchar(45) not null,
    imagem varchar(500) not null,
    Família varchar(45) not null,
	Clima varchar(45) not null,
	Origem varchar(45) not null,
	Luminosidade varchar(45) not null,
    Descr varchar(220) not null
);

select * from plantas;

drop table plantas;

insert into plantas (nomePessoal, nomeCientifico, imagem, Família ,Clima ,Origem , Luminosidade, Descr) 
values ('Abacateiro', 'Abacatus permisidea', 'https://loja.paraisodasarvores.com.br/media/catalog/product/cache/1/image/720x/f605eb9fa47368b9ba054e894db89910/a/b/abacateiro-01.jpg','Lauraceae', 'Equatorial', 'América Central', 'Noturna', 'Sem Descrição');

insert into plantas (nomePessoal, nomeCientifico, imagem, Família ,Clima ,Origem , Luminosidade, Descr) 
values ('Darth Veidar', 'Persea americana', 'https://cdn.gardenjornal.com/9909222/aristolochia_darth_vader_plant_-_learn_about_darth_vader_pipevine_flowers.jpg.webp','Lauraceae', 'Subtropical', 'América do Norte', 'Sol Forte', 'Sem Descrição');

insert into plantas (nomePessoal, nomeCientifico, imagem, Família ,Clima ,Origem , Luminosidade, Descr) 
values ('Alecrim', 'Salvia rosmarinus', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTEy09zgmzpjahyogXbGU7epwTzwD3WQKNRFg&usqp=CAU','Lauraceae', 'Tropical', 'México', 'Sol Pleno', 'Sem Descrição');

insert into plantas (nomePessoal, nomeCientifico, imagem, Família ,Clima ,Origem , Luminosidade, Descr) 
values ('Samambaia', 'Phlebodium decumanum', 'https://www.floresefolhagens.com.br/wp-content/uploads/2017/08/samambaia-americana-nephrolepis-exaltata-1-1.jpg','Lauraceae', 'Equatorial', 'México', 'Noturna', 'Sem Descrição');

insert into plantas (nomePessoal, nomeCientifico, imagem, Família ,Clima ,Origem , Luminosidade, Descr) 
values ('Hortelã', 'Mentha spicata', 'https://s2.glbimg.com/XtqkrO3WROvSg7CEX7wyJXSpnvA=/e.glbimg.com/og/ed/f/original/2016/08/04/folhas-de-hortela.jpg','Lauraceae', 'Equatorial', 'México', 'Sol Pleno', 'Sem Descrição');

insert into plantas (nomePessoal, nomeCientifico, imagem, Família ,Clima ,Origem , Luminosidade, Descr) 
values ('Vioplume', 'Plumidio padacadios', 'https://www.greenme.com.br/wp-content/uploads/2014/08/rafflesia-capa-1.jpg','Lauraceae', 'Subtropical', 'Brasil', 'Sol Forte', 'Sem Descrição');

insert into plantas (nomePessoal, nomeCientifico, imagem, Família ,Clima ,Origem , Luminosidade, Descr) 
values ('Rosa de jericó', 'Selaginella lepidophylla', 'https://www.greenme.com.br/wp-content/uploads/2020/11/rosa.jerico.jpg','Lauraceae', 'Subtropical', 'Atacama', 'Sol Forte', 'Sem Descrição');

insert into plantas (nomePessoal, nomeCientifico, imagem, Família ,Clima ,Origem , Luminosidade, Descr) 
values ('Babobá', 'Saintinia exupéry', 'https://www.greenme.com.br/wp-content/uploads/2020/11/baoba.jpg','Lauraceae', 'Tropical', 'México', 'Sol Forte', 'Sem Descrição');

insert into plantas (nomePessoal, nomeCientifico, imagem, Família ,Clima ,Origem , Luminosidade, Descr) 
values ('Linguão', 'Amorphophallus titanum', 'https://www.greenme.com.br/wp-content/uploads/2020/11/flor-cadaver.jpg','Lauraceae', 'Desertico', 'México', 'Sol Forte', 'Sem Descrição');

insert into plantas (nomePessoal, nomeCientifico, imagem, Família ,Clima ,Origem , Luminosidade, Descr) 
values ('Mamacdea', 'Mamacus memordais', 'https://thumbs.web.sapo.io/?pic=http://mb.web.sapo.io/5aa528c6259f6d47a2fc1619399844ebc4510ad7.jpg&W=900&H=600&delay_optim=1&tv=2&webp=1','Lauraceae', 'Equatorial ', 'México', 'Sol Forte', 'Sem Descrição');

insert into plantas (nomePessoal, nomeCientifico, imagem, Família ,Clima ,Origem , Luminosidade, Descr) 
values ('Rabo de macaco', 'Mamacus marabodius', 'https://diarioprime.com.br/vida-de-casa/wp-content/uploads/2022/03/Design-sem-nome-7-5.jpg','Lauraceae', 'Tropical', 'México', 'Sol Forte', 'Sem Descrição');
