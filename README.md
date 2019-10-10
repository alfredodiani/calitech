# Calitech

Nosso sistema será para auxiliar uma rede de transportes aéreos, pessoas comprando passagens e aviões com rotas disponíveis. Temos como funcionalidades o cadastro do usuário. E também o cadastro de um avião. O sistema irá permitir compras de passagens aéreas, de acordo com o cadastro realizado anteriormente. Para a compra de uma passagem será necessário o escolher a viagem, local de origem e destino, com horário de saída e chegada do local, que terá um avião que suporte esse trajeto disponível para essa viagem.
Os usuários previstos são adultos que entendem de tecnologia e desejam comprar de forma fácil uma passagem de avião. 


#TECNOLOGIAS UTILIZADAS:
Utilizaremos para desenvolver nosso sistema utilizaremos a linguagem PHP e banco de dados ....





Tabelas:
Usuário
	Id
	Nome
	Nascimento
	Senha
	FunçãoNoSistema
Passagens (usuario + voo)
	Id
	IdUsuario
	IdVoo
Voo
	Id
	Origem
	Destino
	Distancia
	DataSaida
	DataChegada
	IdAviao
Aviao
	Id
	Nome
	DataFabricação
	Cor
	Marca
	DistanciaMaximaVoo
