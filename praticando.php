<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <!--
    título
    url da imagem
    cor da borda
    alinhamento do post
  -->

  <style>
    body {
        display: flex;

        justify-content: center;
        align-items: center;


        background-color: #3b3b3b;

        color: #38caef;

        font-family: sans-serif;
    }

    .container {
        
        border-radius: 2vw;

        padding: 5vw;

        background-color: #292929;

        text-align: center;

        display: flex;

        align-items: center;
        justify-content: center;

        flex-direction: column;

        transition: 1s;

    }

    .container:hover {

      -webkit-box-shadow: 0px -1px 67px 10px rgba(56,202,239,1);
      -moz-box-shadow: 0px -1px 67px 10px rgba(56,202,239,1);
      box-shadow: 0px -1px 67px 10px rgba(56,202,239,1);

    }

    .form__group {
  position: relative;
  padding: 20px 0 0;
  width: 100%;
  max-width: 180px;
}

.form__field {
  font-family: inherit;
  width: 100%;
  border: none;
  border-bottom: 2px solid #9b9b9b;
  outline: 0;
  font-size: 17px;
  color: #fff;
  padding: 7px 0;
  background: transparent;
  transition: border-color 0.2s;
}

.form__field::placeholder {
  color: transparent;
}

.form__field:placeholder-shown ~ .form__label {
  font-size: 17px;
  cursor: text;
  top: 20px;
}

.form__label {
  position: absolute;
  top: 0;
  display: block;
  transition: 0.2s;
  font-size: 17px;
  color: #9b9b9b;
  pointer-events: none;
}

.form__field:focus {
  padding-bottom: 6px;
  font-weight: 700;
  border-width: 3px;
  border-image: linear-gradient(to right, #116399, #38caef);
  border-image-slice: 1;
}

.form__field:focus ~ .form__label {
  position: absolute;
  top: 0;
  display: block;
  transition: 0.2s;
  font-size: 17px;
  color: #38caef;
  font-weight: 700;
}

/* reset input */
.form__field:required, .form__field:invalid {
  box-shadow: none;
}

.btn {
  font-size: 1.2rem;
  padding: 1rem 2.5rem;
  border: none;
  outline: none;
  border-radius: 0.4rem;
  cursor: pointer;
  text-transform: uppercase;
  background-color: rgb(14, 14, 26);
  color: rgb(234, 234, 234);
  font-weight: 700;
  transition: 0.6s;
  box-shadow: 0px 0px 60px #1f4c65;
  -webkit-box-reflect: below 10px linear-gradient(to bottom, rgba(0,0,0,0.0), rgba(0,0,0,0.4));
  margin-top: 3vw;
}

.btn:active {
  scale: 0.92;
}

.btn:hover {
  background: rgb(2,29,78);
  background: linear-gradient(270deg, rgba(2, 29, 78, 0.681) 0%, rgba(31, 215, 232, 0.873) 60%);
  color: rgb(4, 4, 38);
}
   </style>


    <div class="container">
        <h1>
            praticando do eder
        </h1>
        <br>
        <form action="destino.php" >

        <div class="form__group field">
            <input type="text" class="form__field" placeholder="título" required="" name="titulo">
            <label for="legenda" class="form__label">título</label>
        </div>

        <div class="form__group field">
            <input type="url" class="form__field" placeholder="url" required="" name="url">
            <label for="legenda" class="form__label">url</label>
        </div>

        <div class="form__group field">
            <input type="text" class="form__field" placeholder="legenda" required="" name="legenda">
            <label for="legenda" class="form__label">legenda</label>
        </div>

        <div class="form__group field">
            <input type="color" class="form__field" placeholder="cor" required="" name="cor">
            <label for="cor" class="form__label">cor</label>
        </div>

        <div class="form__group field">
            <input type="text" class="form__field" placeholder="alinhamento" required="" name="ali">
            <label for="ali" class="form__label">alinhamento</label>
        </div>

        <input type="submit" class="btn" action="submit">

        </form>
    </div>
    <?php

        //legenda e cor
        $titulo = filter_input(INPUT_POST, "titulo", FILTER_SANITIZE_SPECIAL_CHARS);
        $url = filter_input(INPUT_POST, "url", FILTER_SANITIZE_SPECIAL_CHARS);
        $legenda = filter_input(INPUT_POST, "legenda", FILTER_SANITIZE_SPECIAL_CHARS);
        $cor =  filter_input(INPUT_POST,"cor", FILTER_SANITIZE_SPECIAL_CHARS);
        $ali = filter_input(INPUT_POST, "ali", FILTER_SANITIZE_SPECIAL_CHARS);
    ?>
</body>
</html>