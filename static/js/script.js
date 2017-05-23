$(document).ready(function() {
    $("#exampleInputPassword2").blur(function(){
    var passone = $("#exampleInputPassword1").val();
    var passtwo = $("#exampleInputPassword2").val();
        if (passone != passtwo) {
            $("#exampleInputPassword1, #exampleInputPassword2").parent().addClass("has-error");
            alert("Vous n'avez pas saisi deux passwords indentiques");
        }
        else {
            $("#exampleInputPassword1, #exampleInputPassword2").parent().removeClass("has-error").addClass("has-success");
        };
    });

    $(".form-control").keydown(function() {
        var mini = 5;
        var currlength = $(this).val().length;
        if (currlength < mini) {
            $(this).parent().addClass("has-error");
        }
        else {
            $(this).parent().removeClass("has-error").addClass("has-success");
        };
    });
    $(".form-control").keydown(function() {
        var maxi = 25;
        var currlength = $(this).val().length;
        if (currlength > maxi) {
            $(this).parent().addClass("has-error");
        }
        else {
            $(this).parent().removeClass("has-error").addClass("has-success");
        };
    });

    $("#submit").click(function() {
        console.log("pouet");
        if ($("input").parent().hasClass("has-error")) {
            alert("Vous n'avez pas bien complété votre formulaire !")
            $("#submit").removeClasse("btn btn-success").addClass("btn btn-warning")
        }
    })

    $('[data-toggle="tooltip"]').tooltip()

    var options = {};
    options.rules = {
        activated: {
            wordTwoCharacterClasses: true,
            wordRepetitions: true
        }
    };
    $('#exampleInputPassword1').pwstrength(options);
});
