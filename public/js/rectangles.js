$(document).ready(function(){

  /**
   * Run function after clicking the "VERIFICAR" button
   */
  $("button").click(function(){
    /**
     * Defines sizes and positions for the rectangles after typing in the text box. Rectangle BLUE
     */
    document.getElementById("azul").style.left = $("#rect1X").val();
    document.getElementById("azul").style.top = $("#rect1Y").val();
    document.getElementById("azul").style.width = $("#rect1W").val();
    document.getElementById("azul").style.height = $("#rect1H").val();
    document.getElementById("azul").style.display = "block";

    /**
     * Defines sizes and positions for the rectangles after typing in the text box. Rectangle RED
     */
    document.getElementById("vermelho").style.left = $("#rect2X").val();
    document.getElementById("vermelho").style.top = $("#rect2Y").val();
    document.getElementById("vermelho").style.width = $("#rect2W").val();
    document.getElementById("vermelho").style.height = $("#rect2H").val();
    document.getElementById("vermelho").style.display = "block";

    /**
     * Defines sizes and positions for the rectangles after typing in the text box. Rectangle GREEN
     */
    document.getElementById("green").style.left = $("#rect3X").val();
    document.getElementById("green").style.top = $("#rect3Y").val();
    document.getElementById("green").style.width = $("#rect3W").val();
    document.getElementById("green").style.height = $("#rect3H").val();
    document.getElementById("green").style.display = "block";

    /**
     * Store the properties of the rectangles and extract the information separately,
     * POSITION: TOP AND LEFT,
     * WIDTH AND HEIGHT
     * RECTANGLE BLUE
     */
    var rect1 = $(".azul");
    var pos1 = rect1.position();
    var width1 = rect1.width();
    var height1 = rect1.height();

    /**
     * Store the properties of the rectangles and extract the information separately,
     * POSITION: TOP AND LEFT,
     * WIDTH AND HEIGHT
     * RECTANGLE RED
     */
    var rect2 = $(".vermelho");
    var pos2 = rect2.position();
    var width2 = rect2.width();
    var height2 = rect2.height();

    /**
     * Store the properties of the rectangles and extract the information separately,
     * POSITION: TOP AND LEFT,
     * WIDTH AND HEIGHT
     * RECTANGLE GREEN
     */
    var rect3 = $(".green");
    var pos3 = rect3.position();
    var width3 = rect3.width();
    var height3 = rect3.height();

    var L, A;

    /**
     * Call function to check AxB, AxC and BxC collisions by passing their parameters
     */
    aXb(pos1, pos2, width1, width2, height1, height2);
    aXc(pos1, pos3, width1, width3, height1, height3);
    bXc(pos2, pos3, width2, width3, height2, height3);

    function aXb(){

        /**
         * Enter in the variable "delta_x" the value of the difference between,
         * the X of rectangle one and rectangle 2. Even if the value is negative,
         * the Math.abs function returns an absolute value, that is, a positive value.
         * The same goes for "delta_y".
         */
        var delta_x = Math.abs(pos1.left - pos2.left);
        var delta_y = Math.abs(pos1.top - pos2.top);

        /**
         * At that point, check if the rectangle is to the left or directly from another rectangle.
         * This allows you to store a value for the variable L and know which value to compare with.
         */
        if(pos1.left < pos2.left){
            L = width1;
        }else{
            L = width2;
        }

        /**
         * Like the previous IF, it checks whether the rectangle is below or above another rectangle.
         * This allows you to store a value for variable A and know which value to compare with.
         */
        if(pos1.top < pos2.top){
            A = height1;
        }else{
            A = height2;
        }

        /**
         * The comparison of "delta_x" in relation to L and "delta_y" in relation to A, serves to verify
         * if there is a collision between the rectangles.
         */
        if(delta_x >= L || delta_y >= A){
            var abc = false;
            document.getElementById("axb").innerHTML = "A - B  => False";
            console.log(false);
        }else{
            var abc = true;
            document.getElementById("axb").innerHTML = "A - B => True";
            console.log(true);
        }
    }

    function aXc(){
        /**
         * Enter in the variable "delta_x" the value of the difference between,
         * the X of rectangle one and rectangle 2. Even if the value is negative,
         * the Math.abs function returns an absolute value, that is, a positive value.
         * The same goes for "delta_y".
         */
        var delta_x = Math.abs(pos1.left - pos3.left);
        var delta_y = Math.abs(pos1.top - pos3.top);

        /**
         * At that point, check if the rectangle is to the left or directly from another rectangle.
         * This allows you to store a value for the variable L and know which value to compare with.
         */
        if(pos1.left < pos3.left){
            L = width1;
        }else{
            L = width3;
        }

        /**
         * Like the previous IF, it checks whether the rectangle is below or above another rectangle.
         * This allows you to store a value for variable A and know which value to compare with.
         */
        if(pos1.top < pos3.top){
            A = height1;
        }else{
            A = height3;
        }

        /**
         * The comparison of "delta_x" in relation to L and "delta_y" in relation to A, serves to verify
         * if there is a collision between the rectangles.
         */
        if(delta_x >= L || delta_y >= A){
            var aXc = false;
            document.getElementById("axc").innerHTML = "A - C => False";
            console.log(false);
        }else{
            var aXc = true;
            document.getElementById("axc").innerHTML = "A - C => True";
            console.log(true);
        }
    }

    function bXc(){
        /**
         * Enter in the variable "delta_x" the value of the difference between,
         * the X of rectangle one and rectangle 2. Even if the value is negative,
         * the Math.abs function returns an absolute value, that is, a positive value.
         * The same goes for "delta_y".
         */
        var delta_x = Math.abs(pos2.left - pos3.left);
        var delta_y = Math.abs(pos2.top - pos3.top);

        /**
         * At that point, check if the rectangle is to the left or directly from another rectangle.
         * This allows you to store a value for the variable L and know which value to compare with.
         */
        if(pos2.left < pos3.left){
            L = width2;
        }else{
            L = width3;
        }

        /**
         * Like the previous IF, it checks whether the rectangle is below or above another rectangle.
         * This allows you to store a value for variable A and know which value to compare with.
         */
        if(pos2.top < pos3.top){
            A = height2;
        }else{
            A = height3;
        }

        /**
         * The comparison of "delta_x" in relation to L and "delta_y" in relation to A, serves to verify
         * if there is a collision between the rectangles.
         */
        if(delta_x >= L || delta_y >= A){
            var bXc = false;
            document.getElementById("bxc").innerHTML = "B - C => False";
            console.log(false);
        }else{
            var aXb = true;
            document.getElementById("bxc").innerHTML = "B - C => True";
            console.log(true);
        }
    }
  });
});
