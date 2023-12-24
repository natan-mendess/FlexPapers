create table if not exists categoria(
    idcat int not null auto_increment,
    nome varchar(45) not null,
    primary key(idcat)
);

create table if not exists `produtos`(
	`idprod` int(20) auto_increment,
	`titulo` varchar(100),
    `descricao` text,
    `preco` decimal(9,2),
    `tipoCapa` varchar(45),
    `dataLancamento` varchar(45),
    `editora` varchar(45),
    `idioma` varchar(45),
    `capaComum` int,
    `dimensoes` varchar(45),
    `foto` varchar(255),
    categoria int,
    primary key(`idprod`),
    foreign key(categoria)
    references categoria(idcat)
);

insert into categoria(nome) 
values ('Literatura'),
('Comics'),
('Filosofia'),
('Medicina'),
('História');

insert into produtos (titulo,descricao,preco,tipocapa,dataLancamento,editora,idioma,capacomum,dimensoes,foto,categoria)
values ('Anatomia da musculação: Guia ilustrado para o aumento de massa e definição do corpo', 'Esta segunda edição do best-seller Anatomia da musculação apresenta ilustrações totalmente reformuladas e novos exercícios. Concentrando-se nos principais grupos musculares dos ombros, tórax, costas, membros superiores e inferiores, abdominais, e focalizando zonas musculares e áreas difíceis de trabalhar, esta obra faz a diferença entre o simples ganho de massa e a escultura de um corpo digno de concurso fitness. Com ilustrações anatômicas detalhadas e coloridas, instruções passo a passo e informações sobre os músculos primários e secundários trabalhados em cada exercício, esta é a obra ideal para ajudá-lo a modelar seu físico de uma forma jamais imaginada. O verdadeiro segredo está em conhecer a anatomia para que se possa modificá-la da maneira desejada. Todos os exercícios praticados em uma academia são abordados e qualquer um deles poderá ser consultado em menos de cinco minutos. Trata-se de um guia prático com 100 exercícios e 104 variações acompanhados de discussões técnicas e ilustrações de alta qualidade. É uma referência para fisiculturistas, atletas, praticantes de musculação, alunos e professores de educação física e ciências do esporte.',
'161.16','Capa comum', '16 junho 2017', 'Editora Manole; 2ª edição', 'Português', '240','24.4 x 17.6 x 1.8 cm','fotos_produtos/anatomia_musculacao.jpg',4);

insert into produtos (titulo,descricao,preco,tipocapa,dataLancamento,editora,idioma,capacomum,dimensoes,foto,categoria)
values ('Meditações: Edição com postais + marcador (Coleção Grandes Mestres do Estoicismo)', 'Estas são anotações pessoais do imperador romano Marco Aurélio escritas entre os anos de 170 a 180. Também conhecidas como Meditações a mim mesmo, reúnem aforismos que orientaram o governante pela perspectiva do estoicismo – o controle das emoções para que se evitem os erros de julgamento. Suas meditações formam um manual de comportamento ainda atual sobre como podemos melhorar nosso comportamento e o relacionamento com o próximo. Marco Aurélio trava um diálogo interior em busca de verdades fundamentais por meio da razão sem deixar de lado a sensibilidade. Sem inclinação a qualquer crença religiosa, Meditações apela para ordens universais nas quais até mesmo os acontecimentos ruins ocorrem para o bem de todos. O imperador assume o papel do filósofo que instrui o aluno e dá conselhos ao amigo. Por seu caráter íntimo, Meditações tornou-se um dos escritos mais reveladores e inspiradores a respeito do pensamento de um grande líder. Apresenta ensinamentos sobre as virtudes, a felicidade, a morte, as paixões e a harmonia com a natureza e a aceitação de suas leis. Figura ainda entre as obras fundamentais para os estudiosos da filosofia estoica, mesmo milênios depois de sua composição.',
'36.90','Capa comum', '31 outubro 2019', 'Edipro; 1ª edição', 'Português', '160','20.8 x 13.8 x 1 cm','fotos_produtos/meditacoes.jpg',3);

insert into produtos (titulo,descricao,preco,tipocapa,dataLancamento,editora,idioma,capacomum,dimensoes,foto,categoria)
values ('Moby Dick', 'Lançado em 1851, Moby Dick, ou A baleia, de Herman Melville (1819-1891), se tornou um dos livros de aventura mais emblemáticos da literatura universal. A história do capitão Ahab, em busca de vingança contra o terrível cachalote que amputara sua perna, entrou definitivamente para a cultura popular, inspirando, entre outras criações, pinturas de Jackson Pollock e Frank Stella, adaptações de Orson Welles para o rádio e o teatro, um filme de John Huston, e até um blues do Led Zeppelin. Mas uma leitura atenta da obra-prima de Melville pode revelar as camadas mais profundas do texto, que deram ao autor o posto de maior prosador norte-americano do século XIX. Entremeados à narrativa vão se sobressaindo múltiplos elementos: referências bíblicas que ecoam críticas da época ao nascente imperialismo dos Estados Unidos; a questão racial, personificada na figura dos três arpoadores, um negro, um índio e um nativo polinésio; a análise da extração do óleo dos cachalotes como atividade econômica industrial, incluindo uma discussão sobre a sustentabilidade da pesca das baleias; as tensões sociais, que aparecem nas relações entre superiores e subordinados e na possibilidade sempre presente de um motim ― tudo isso encenado no palco shakespeariano do convés de um baleeiro que parte de Nantucket, em Massachusetts, até chegar ao Pacífico, onde ocorre o enfrentamento final entre o obsessivo capitão Ahab e a monstruosa baleia branca. Além de trazer ensaios de Evert Duyckinck, D. H. Lawrence e F. O. Mathiessen sobre Moby Dick, que delineiam a recepção crítica do livro, esta nova edição apresenta um prefácio de Albert Camus, inédito em nosso país, e um ensaio de Bruno Gambarotto, um dos maiores especialistas brasileiros na obra de Melville.',
'119.00','Capa comum', '26 julho 2019', 'Editora 34; 1ª edição', 'Português', '648','23 x 15.6 x 3.4 cm','fotos_produtos/mobydick.jpg',1);

insert into produtos (titulo,descricao,preco,tipocapa,dataLancamento,editora,idioma,capacomum,dimensoes,foto,categoria)
values ('1984', 'Publicado em 1949, 1984 é um influente romance distópico do século XX e um clássico moderno. Escrito por George Orwell, o livro retrata um futuro totalitário onde o protagonista, Winston, vive aprisionado em uma sociedade dominada pelo Estado. Nesse mundo, cada indivíduo vive isolado, mas sob constante vigilância do Grande Irmão, uma personificação do poder totalitário. A ideologia do Partido dominante busca apenas o poder em si, sem se importar com riqueza, luxo, vida longa ou felicidade. O Brien, um membro hierárquico do Partido, revela a Winston que o poder puro é o único objetivo deles. Quando foi lançado, o livro alcançou grande sucesso, atraindo leitores de diversas faixas etárias e posições políticas. A obra de Orwell apresenta temas como resistência individual contra uma ditadura opressiva, sexualidade como forma de libertação e horrores mortais. A escrita clara de Orwell, os personagens bem desenvolvidos e a trama seca e satírica contribuíram para o status de clássico moderno de 1984. Além disso, o livro aborda ideias que ainda são relevantes, como a manipulação da realidade por meio da Novafala, imposta pelo Partido para renomear coisas e instituições. A obra também critica os totalitarismos nazifascistas e o comunismo da União Soviética. Apesar das circunstâncias históricas em que foi escrito, 1984 permanece uma poderosa reflexão ficcional sobre os excessos do poder incontestável em qualquer contexto. É considerado uma leitura essencial para compreender a história moderna e é elogiado como uma obra-prima terminal de Orwell, sendo reconhecido como um dos maiores escritores do século XX.',
'29.90','Capa comum', '21 julho 2009', 'Companhia das Letras; 1ª edição', 'Português', '416','21 x 13.6 x 2.2 cm','fotos_produtos/1984.jpg',1);

insert into produtos (titulo,descricao,preco,tipocapa,dataLancamento,editora,idioma,capacomum,dimensoes,foto,categoria)
values ('Livro dos Cinco Aneis', 'O Livro dos Cinco Anéis traça um panorama dos pilares do pensamento estratégico e sua aplicação em qualquer batalha. Mais do que isso, a obra indica o caminho do guerreiro em busca de sabedoria. De acordo com o autor, Miyamoto Musashi, o samurai imbatível, na vida é preciso superar muitas ondas contrárias, o que requer espírito preparado para atravessar momentos críticos. Da mesma forma, nas artes marciais, durante umduelo, é essencial vencer esses momentos críticos, compreendendo os pontos fortes do adversário e utilizando com sabedoria as próprias habilidades. Assim, ancorado em conhecimentos e em princípios estratégicos, o bom guerreiro alcançará a tranquilidade de espírito para vencer qualquer luta. Com o domínio do Caminho da estratégia, o homem chega ao domínio de si e, em consequência, à vitória, Este é um livro de cabeceira, para quem quer vencer - nas artes marciais e na vida.',
'19.99','Capa comum', '13 dezembro 2021', 'Pe Da Letra', 'Português', '144','23 x 16 x 2 cm','fotos_produtos/cinco_aneis.jpg',5);

insert into produtos (titulo,descricao,preco,tipocapa,dataLancamento,editora,idioma,capacomum,dimensoes,foto,categoria)
values ('O Chamado de Cthulhu', 'François Baranger traz uma versão ilustrada definitiva de O Chamado de Cthulhu, de H.P. Lovecraft. Sua arte evoca o universo sombrio e nebuloso descrito pelo autor, em uma edição luxuosa em capa dura. A história acompanha Francis Thurston em sua descoberta de um culto adorador de horrores antigos, mergulhando-o em uma jornada assustadora. Através das incríveis pinturas de Baranger, o leitor pode apreciar a atmosfera aterrorizante do mundo de Lovecraft. Essa edição ilustrada é uma verdadeira obra de arte que traduz visualmente a grandiosidade do apocalipse lovecraftiano. As pinturas de François Baranger ampliam o escopo do imaginável, evocando o horror indizível do despertar de Cthulhu. Com sua sobriedade elegante, essas imagens sombrias e espetaculares transportam o leitor para um universo de beleza lúgubre e gigantesca. É uma oportunidade única de explorar a imaginação de Lovecraft e os sonhos de Baranger transformados em uma bela obra de arte em formato de livro.',
'89.90','Capa dura', '16 novembro 2021', 'Darkside; 1ª edição', 'Português', '64','23.2 x 1 x 30.6 cm','fotos_produtos/chamado_de_cthulhu.jpg',2);

insert into produtos (titulo,descricao,preco,tipocapa,dataLancamento,editora,idioma,capacomum,dimensoes,foto,categoria)
values ('Batman - A Piada Mortal', 'Do premiado roteirista Alan Moore (Watchmen, V de Vingança) conta como um dia ruim na vida de um homem pode significar a linha que separa a sanidade da loucura. Principalmente quando se trata do Coringa, o maior e mais conhecido vilão do mundo dos quadrinhos. Os desenhos de Brian Bolland (Camelot 3000), um dos maiores ilustradores dos quadrinhos, elevaram a história praticamente à perfeição retratando com maestria o mundo imaginado por Alan Moore. Mas faltava um detalhe para completar a obra. Bolland não pôde colorir a edição original, e agora, vinte anos depois, isso foi corrigido e as cores foram completamente refeitas pelo artista, seguindo fielmente a sua imaginação. Edição obrigatória para os fãs do Coringa, do Batman e dos quadrinhos.',
'30.00','Capa dura', '20 novembro 2018', 'Panini ', 'Português', '82','26.6 x 17.4 x 1 cm','fotos_produtos/a_piada_mortal.jpg',2);

insert into produtos (titulo,descricao,preco,tipocapa,dataLancamento,editora,idioma,capacomum,dimensoes,foto,categoria)
values ('O Hobbit', 'Bilbo Bolseiro era um dos mais respeitáveis hobbits de todo o Condado até que, um dia, o mago Gandalf bate à sua porta. A partir de então, toda sua vida pacata e campestre soprando anéis de fumaça com seu belo cachimbo começa a mudar. Ele é convocado a participar de uma aventura por ninguém menos do que Thorin Escudo-de-Carvalho, um príncipe do poderoso povo dos Anãos. Esta jornada fará Bilbo, Gandalf e 13 anãos atravessarem a Terra-média, passando por inúmeros perigos, como os imensos trols, as Montanhas Nevoentas infestadas de gobelins ou a muito antiga e misteriosa Trevamata, até chegarem (se conseguirem) na Montanha Solitária. Lá está um incalculável tesouro, mas há um porém. Deitado em cima dele está Smaug, o Dourado, um dragão malicioso que... bem, você terá que ler para descobrir. Lançado em 1937, O Hobbit é um divisor de águas na literatura de fantasia mundial. Mais de 80 anos após a sua publicação, o livro que antecede os ocorridos em O Senhor dos Anéis continua arrebatando fãs de todas as idades, talvez pelo seu tom brincalhão com uma pitada de magia élfica, ou talvez porque J.R.R. Tolkien tenha escrito o melhor livro infantojuvenil de todos os tempos.',
'69.90','Capa dura', '15 julho 2019', 'HarperCollins; 1ª edição ', 'Português', '336 ','21.2 x 14 x 2.4 cm','fotos_produtos/hobbit.jpg',1);

create table if not exists enderecos(
    idend int not null auto_increment,
    bairro varchar(50),
    rua varchar(50),
    numero int,
    primary key(idend)
);

insert into enderecos (bairro, rua, numero) values ('Centro', 'Rua das Flores', '123'),
('Jardim Primavera', 'Avenida das Palmeiras', '456'),
('Vila Bela', 'Rua dos Pássaros', '789');

create table if not exists Usuarios(
    iduser int not null auto_increment,
    email varchar(100),
    senha varchar(50),
    nome varchar(255),
    sexo varchar(25),
    endereco int,
    telefone varchar(100),
    primary key(iduser),
    foreign key(endereco)
    references enderecos(idend)
);

insert into Usuarios (email, senha, nome, sexo, endereco, telefone)
values ('carlos@email.com', 'senha123', 'Carlos Afonso', 'masculino', 1, '123-456-7890'),
('jose@email.com', 'senha456', 'José Ricardo', 'masculino', 2, '987-654-3210'),
('isadora@email.com', 'senha789', 'Isadora Muniz', 'feminino', 3, '555-555-5555');

ALTER TABLE Usuarios
ADD COLUMN administrador INT AFTER telefone;

insert into Usuarios (email, senha, nome, sexo, endereco, telefone, administrador)
values ('admin@admin.com', 'admin', 'ADM', 'masculino', 1, '123-456-7890',1);