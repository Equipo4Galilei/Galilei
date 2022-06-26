$(document).ready(() => {


    /******************/
    /*** START CHAT ***/
    /******************/


    // set visitor name
    let $userName = "Tom";

    // start chatbox
    $("#form-start").on("submit", (event) => {
        event.preventDefault();
        $userName = $("#username").val();
        $("#landing").slideUp(300);
        setTimeout(() => {
            $("#start-chat").html("Seguir en el chat")
        }, 300);
    });




    /*****************/
    /*** USER CHAT ***/
    /*****************/


    // Post a message to the board
    function $postMessage() {
        $("#message").find("br").remove();
        let $message = $("#message").html().trim(); // get text from text box
        $message = $message.replace(/<div>/, "<br>").replace(/<div>/g, "").replace(/<\/div>/g, "<br>").replace(/<br>/g, " ").trim();
        if ($message) { // if text is not empty
            const html = `<div class="post post-user">${$message + timeStamp()}</span></div>`; // convert post to html
            $("#message-board").append(html); // add post to board
            $scrollDown(); // stay at bottom of chat
            botReply($message);
        };
        $("#message").empty();
    };

    // Chat input
    $("#message").on("keyup", (event) => {
        if (event.which === 13) $postMessage(); // Use enter to send
    }).on("focus", () => {
        $("#message").addClass("focus");
    }).on("blur", () => {
        $("#message").removeClass("focus");
    });
    $("#send").on("click", $postMessage);



    /**********************/
    /*** CODIGO DE APARECER Y DESAPARECER DIV ***/
    /**********************/

    window.addEventListener('load', init, false);

    function init() {
        let div = document.querySelector('#phone-wrapper');
        div.style.visibility = 'hidden';
        let boton = document.querySelector('#ocultar-mostrar');
        boton.addEventListener('click', function(e) {
            if (div.style.visibility === 'visible') {
                div.style.visibility = 'hidden';
            } else {
                div.style.visibility = 'visible';
            }
        }, false);
    }

    /**********************/
    /*** CODIGO DE APARECER Y DESAPARECER DIV***/
    /**********************/



    /**********************/
    /*** AUTO REPLY BOT ***/
    /**********************/


    function botReply(userMessage) {
        const reply = generateReply(userMessage);
        if (typeof reply === "string") postBotReply(reply);
        else reply.forEach((str) => postBotReply(str));
    };

    function generateReply(userMessage) {
        const message = userMessage.toLowerCase();
        let reply = [`Perdon`, `No logro entenderte, aun necesito aprender :(`];

        // Generate some different replies
        if (/^hola$|^hell?o|^necesito ayuda|^pueden ayudarme|^una pregunta|^Hola/.test(message)) reply = [`Hola! ${$userName}`, `Bienvenido a Galilei, ¿que puedo hacer por ti?`];

        else if (/nada/.test(message)) reply = [`Okey :(`, `Aqui estare por si necesitas algo ${$userName}`];

        else if (/okey gracias|muchas gracias|okey|gracias/.test(message)) reply = [`No hay de que! :)`, `si tienes otra duda existencial aqui estamos ${$userName} !`];

        else if (/o bueno mejor si|bueno una pregunta|una pregunta|o mejor si|o bueno si|bueno si/.test(message)) reply = [`si claro`, `¿Cual es tu pregunta? ${$userName} !`];

        else if (/la tierra es plana|fuimos a la luna/.test(message)) reply = [`bueno te diria que si por los miles de datos que hay en internet, asi como imagenes en tiempo real, con datos cientificos que me dicen que si, pero el profe pruneda sabe cosas ¬.¬, asi que no lo se :/.`];

        else if (/class\=\"fa/.test(message)) reply = [`Yo tambien estoy sonriendo!`, `Bien! <span class="far fa-grin-beam fa-2x"></span>`, `Puedo ayudarte en algo?`];
        else if (/puedo hablar con alguien|puedo hablar con un humano|eres una persona|eres un robot/.test(message)) reply = [`no`, `No te creas, pero ya que no soy lo suficiente humano para ti aqui te dejo los numeros de telefono a los cuales puedes comunicarte`, `Luis: 811989443`, `Hugo: 811734845`, `Dianet:  8114673894`, `Saúl: 8113453872`];

        else if (/Adios|adios|bai|bie/.test(message)) reply = [`Espero averte servido de algo, hasta luego :)`];

        else if (/qwe|werwfv|/.test(message)) reply = "Valla, al parecer alguien esta aprendiendo a escribir, yo tambien puedo hacer eso, " + userMessage;

        return reply;
    };

    function postBotReply(reply) {
        const html = `<div class="post post-bot">${reply + timeStamp()}</div>`;
        const timeTyping = 500 + Math.floor(Math.random() * 2000);
        $("#message-board").append(html);
        $scrollDown();
    };



    /******************/
    /*** TIMESTAMPS ***/
    /******************/


    function timeStamp() {
        const timestamp = new Date();
        const hours = timestamp.getHours();
        let minutes = timestamp.getMinutes();
        if (minutes < 10) minutes = "0" + minutes;
        const html = `<span class="timestamp">${hours}:${minutes}</span>`;
        return html;
    };




    /***************/
    /*** CHAT UI ***/
    /***************/


    // Back arrow button
    $("#back-button").on("click", () => {
        $("#landing").show();

    });


    // Menu - navigation
    $("#nav-icon").on("click", () => {
        $("#nav-container").show();
    });

    $("#nav-container").on("mouseleave", () => {
        $("#nav-container").hide();
    });

    $(".nav-link").on("click", () => {
        $("#nav-container").slideToggle(200);
    });

    // Clear history
    $("#clear-history").on("click", () => {
        $("#message-board").empty();
        $("#message").empty();
    });

    // Sign out
    $("#sign-out").on("click", () => {
        $("#message-board").empty();
        $("#message").empty();
        $("#landing").show();
        $("#username").val("");
        $("#start-chat").html("Start chat");
    });




    /*********************/
    /*** SCROLL TO END ***/
    /*********************/


    function $scrollDown() {
        const $container = $("#message-board");
        const $maxHeight = $container.height();
        const $scrollHeight = $container[0].scrollHeight;
        if ($scrollHeight > $maxHeight) $container.scrollTop($scrollHeight);
    }




    /***************/
    /*** EMOIJIS ***/
    /***************/


    // toggle emoijis
    $("#emoi").on("click", () => {
        $("#emoijis").slideToggle(300);
        $("#emoi").toggleClass("fa fa-grin far fa-chevron-down");
    });

    // add emoiji to message
    $(".smiley").on("click", (event) => {
        const $smiley = $(event.currentTarget).clone().contents().addClass("fa-lg");
        $("#message").append($smiley);
        $("#message").select(); // ==> BUG: message field not selected after adding smiley !! 
    });

});