
function fazPost(url, body) {
    console.log("Body=", body)
    let request = new XMLHttpRequest()
    request.open("POST", url, true)
    request.setRequestHeader("Content-type", "application/json")
    request.send(JSON.stringify(body))

    request.onload = function() {
        console.log(this.responseText)
    }

    return request.responseText
}


function produto1() {
    event.preventDefault()
    let url = "https://docs.google.com/spreadsheets/d/1u7RBzbB0bZY1c9_xtIjsWAURoRiwVN_PgSewZQrI45Y/edit?usp=sharing"

    let data_atual = document.getElementById("data_atual").value
    let pdv = document.getElementById("pdv").value
    let nome = document.getElementById("nome").value
    let cod_produto = '197769'
    let desc_produto = 'COXINHA MARIN RESF PV'
    let estoque = document.getElementById("estoque1").value
    let motivo = document.getElementById("motivo").value
    let comentario = document.getElementById("comentario").value

    body = {
        "data_atual": data_atual,
        "pdv": pdv,
        "nome": nome,
        "cod_produto": cod_produto,
        "desc_produto": desc_produto,
        "estoque": estoque,
        "motivo": motivo,
        "comentario": comentario
    }

    fazPost(url, body)
}

function produto2() {
    event.preventDefault()
    let url = "https://sheetdb.io/api/v1/skn3bch0qzzkz"

    let data_atual = document.getElementById("data_atual").value
    let pdv = document.getElementById("pdv").value
    let nome = document.getElementById("nome").value
    let cod_produto = '197772'
    let desc_produto = 'PASSARINHO MARIN RESFR PV'
    let estoque = document.getElementById("estoque2").value
    let motivo = document.getElementById("motivo").value
    let comentario = document.getElementById("comentario").value

    body = {
        "data_atual": data_atual,
        "pdv": pdv,
        "nome": nome,
        "cod_produto": cod_produto,
        "desc_produto": desc_produto,
        "estoque": estoque,
        "motivo": motivo,
        "comentario": comentario
    }

    fazPost(url, body)
}

function produto3() {
    event.preventDefault()
    let url = "https://sheetdb.io/api/v1/skn3bch0qzzkz"

    let data_atual = document.getElementById("data_atual").value
    let pdv = document.getElementById("pdv").value
    let nome = document.getElementById("nome").value
    let cod_produto = '197775'
    let desc_produto = '1/2 ASA MARIN RESFR PV'
    let estoque = document.getElementById("estoque3").value
    let motivo = document.getElementById("motivo").value
    let comentario = document.getElementById("comentario").value

    body = {
        "data_atual": data_atual,
        "pdv": pdv,
        "nome": nome,
        "cod_produto": cod_produto,
        "desc_produto": desc_produto,
        "estoque": estoque,
        "motivo": motivo,
        "comentario": comentario
    }

    fazPost(url, body)
}

function produto4() {
    event.preventDefault()
    let url = "https://sheetdb.io/api/v1/skn3bch0qzzkz"

    let data_atual = document.getElementById("data_atual").value
    let pdv = document.getElementById("pdv").value
    let nome = document.getElementById("nome").value
    let cod_produto = '124506'
    let desc_produto = 'FILE DE COXA C/P CG (PCT)'
    let estoque = document.getElementById("estoque4").value
    let motivo = document.getElementById("motivo").value
    let comentario = document.getElementById("comentario").value

    body = {
        "data_atual": data_atual,
        "pdv": pdv,
        "nome": nome,
        "cod_produto": cod_produto,
        "desc_produto": desc_produto,
        "estoque": estoque,
        "motivo": motivo,
        "comentario": comentario
    }

    fazPost(url, body)
}

function produto5() {
    event.preventDefault()
    let url = "https://sheetdb.io/api/v1/skn3bch0qzzkz"

    let data_atual = document.getElementById("data_atual").value
    let pdv = document.getElementById("pdv").value
    let nome = document.getElementById("nome").value
    let cod_produto = 'FLFAT010204'
    let desc_produto = 'FATIADOS CG (TODAS AS GRAMATURAS)'
    let estoque = document.getElementById("estoque5").value
    let motivo = document.getElementById("motivo").value
    let comentario = document.getElementById("comentario").value

    body = {
        "data_atual": data_atual,
        "pdv": pdv,
        "nome": nome,
        "cod_produto": cod_produto,
        "desc_produto": desc_produto,
        "estoque": estoque,
        "motivo": motivo,
        "comentario": comentario
    }

    fazPost(url, body)
}

function produto6() {
    event.preventDefault()
    let url = "https://sheetdb.io/api/v1/skn3bch0qzzkz"

    let data_atual = document.getElementById("data_atual").value
    let pdv = document.getElementById("pdv").value
    let nome = document.getElementById("nome").value
    let cod_produto = 'FLCX010205'
    let desc_produto = 'FILE DE COXA MARIN RESF'
    let estoque = document.getElementById("estoque6").value
    let motivo = document.getElementById("motivo").value
    let comentario = document.getElementById("comentario").value

    body = {
        "data_atual": data_atual,
        "pdv": pdv,
        "nome": nome,
        "cod_produto": cod_produto,
        "desc_produto": desc_produto,
        "estoque": estoque,
        "motivo": motivo,
        "comentario": comentario
    }

    fazPost(url, body)    
}

function voltar() {
    alert("Salvo com sucesso!");
    window.location.href = "index.html";
}
