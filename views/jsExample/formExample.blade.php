<!DOCTYPE html>
<html>
<head>
    <title>form example</title>
</head>
<body language=JavaScript type="text/javascript" onload="window_onload()">
<form name="form1">
    <p>this is form1</p>
    <input type="button" name="exampleBtn"  value="i am a example btn" onclick="exampleBtn_getClickNum()" onmousedown="exampleBtn_onmousedown()" onmouseover="exampleBtn_onmouseover()" onmouseup="exampleBtn_onmouseup()">
    <input type="text" name="userName" required="required" >
    <textarea cols="10" rows="4">
        jjsjshh
        djsojso
    </textarea><br>
    <input type="checkbox" name="deded" value="dwedw" checked>dsdsds<br>
    <input type="checkbox" name="deded" value="dwedw" checked>dsdsds<br>
    <input type="checkbox" name="deded" value="dwedw" checked>dsdsds<br>
    <input type="checkbox" name="sdsd" value="ddsds">dsdsdsdsds<br>
    <select name="theDay">
        <option value="mon">星期一</option>
        <option value="thu">星期二</option>
        <option value="wens">星期三</option>
        <option value="thir">星期四</option>
        <option value="fir">星期五</option>
        <option value="sat">星期六</option>
        <option name="sun" value="sun">星期日</option>
    </select>
    <br>
    <input type="button" value="add sunday" name="addSun" onclick="sun_add()">
    <input type="button" name="delSun"  value="del sunday" onclick="sun_del()">
</form>
<form name="form2">
    <p>this is form2</p>
</form>
<form name="form3">
    <p>this is form3</p>
</form>

</body>
<script type="text/javascript">

    function sun_add(){
        var sunOption = new Option('星期天', 'sun');
        document.form1.theDay.options[6] = sunOption;
    }

    function sun_del()
    {
        console.log(document.form1.theDay.options.sun);
        document.form1.theDay.options[6] = null;
    }
    function window_onload() {
        var numberForms = document.forms.length;
        for(var formIndex=0; formIndex < numberForms; formIndex++){
            // alert(document.forms[formIndex].name);
        }
        // body...
    }

    var countClick=0;
    function exampleBtn_getClickNum(){
        countClick++;
        // document.form1.exampleBtn.value = 'i\'ve been clicked ' + countClick + ' times';
    }
    function exampleBtn_onmousedown()
    {
        document.form1.exampleBtn.value = "do not touch me!";
    }
    function exampleBtn_onmouseover()
    {
        document.form1.exampleBtn.value = "hi nice to meet you";
    }
    function exampleBtn_onmouseup()
    {
        document.form1.exampleBtn.value = "thank you!";
    }

    console.log(document.form1.theDay.options[0].value);

</script>
</html>