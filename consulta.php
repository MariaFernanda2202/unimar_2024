<section id="consulta" class="agendamento">
      <div class="form">
        <div class="banner">
          <div class="title">
            <h1>Agendamento <br> <center>De consulta</center> </h1> 
          </div>
          <img id="baixarcat" src="assets/img/gatinho.png" alt="">
        </div>
        <div id="form">
          <div class="h1-box">
            <h1 >Após o envio, você receberá uma mensagem com os detalhes sobre a data e o horário agendados.</h1>
          </div>
          <div class="form-box">
            <form action="">
              <label for="nomePet">Nome do Pet</label>
              <input placeholder="Nome do seu pet" type="text" id="nomePet" name="nomePet" required>
              <label for="raca">Raça</label>
              <input placeholder="Raça do seu Pet" type="text" id="raca" name="raca">
              <label for="gen">Gênero</label>
              <div class="radio-inputs">
                <label class="radio">
                  <input type="radio" name="radio" checked="">
                  <span class="name">Fêmea</span>
                </label>
                <label class="radio">
                  <input type="radio" name="radio">
                  <span class="name" style="color: rgb(84, 152, 255);">Macho</span>
                </label>
              </div>
            </form>
            <form action="">
              <label for="nomeDono">Nome do Dono</label>
              <input placeholder="Obrigatório" type="text" id="nomeDono" name="nomeDono" required>
              <label  for="doc">Documento</label>
              <input placeholder="Rg ou CPF, Opcional" type="text" id="doc" name="doc">
              <label for="number">Número de telefone</label>
              <input placeholder="Obrigatório" type="text" id="number" name="number" maxlength="15">
            </form>
          </div>
          <div class="enviar">
            <button type="submit">Agendar</button>
          </div>
        </div>
      </div>
    </section>
