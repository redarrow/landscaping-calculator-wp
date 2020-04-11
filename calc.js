var $=jQuery.noConflict();

function get_conversion_factor(product){

//product array key value product:conversion factor
var obj = {
  "sand": 1.6,
  "lime1257": 1.5,
  //#304 or #411 limestone
  "lime304411": 2.0,
  //limestone fines
  "limefine": 1.9,
  //# or #4 washed gravel
  "lime34": 1.5,
  //#8 washed gravel
  "washed8": 1.8,
  // #57 washed graveL
  "washed57": 1.6,
  //57 recycled
  "recycled57": 1.6,
  // #304 recycled
  "recycled304": 1.5,
  //recycled screenings
  "recycledscreenings": 1.9,
  //mason sand concrete sand
  "mason": 1.25,
  //asphalt
  "asphalt": 2.0
};

var conversion_factor = obj[product];   // value2

return conversion_factor;

}

 //$(function () {
//$("input[name='depth'], input[name='width'],input[name='product'], input[name='length']").on("change keyup", function(event){

function calculateMaterial(){
    //get he product from the form
    var product = $("#product").val();

    if(product != ""){
    var depth = $("#depth").val();
    //convert inchest to decimal
    var convert_to_decimal = depth/12;
    var width = $("#width").val();
    var length = $("#length").val();

    if(convert_to_decimal !== 'undefined'){
        var total = 0;
        var roundedcubic = 0;
        total = convert_to_decimal * width * length;
        //get the total cubic yards
        var cubic = total/27;
        var conversion_fac = get_conversion_factor(product);
        var amount  = cubic * conversion_fac;
        roundedcubic = Math.ceil(amount * 100) / 100;

        $("#needed").html(Math.ceil(roundedcubic));
          //$("#qty").html(qty_type);

     }}
     else{
        qty_type = '<span style="margin-left:-5px;color:red;">Please Select Material Type</a>';
        var roundedcubic = '';
        $("#needed").html(roundedcubic);
        //$("#qty").html(qty_type);
				$("#qty").html("cubic yards");
     }
}