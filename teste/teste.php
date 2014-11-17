<script src="../js/jquery-2.1.1.min.js"></script>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function () {
        readURL(this);
    });
</script>   
<script>
    $("div.test").on({
        click: function () {
            $(this).toggleClass("active");
        }, mouseenter: function () {
            $(this).addClass("inside");
        }, mouseleave: function () {
            $(this).removeClass("inside");
        }
    });
</script>

<form id="form1" runat="server">
    <input type='file' id="imgInp" />
    <img id="blah" src="#" alt="your image" />
</form>