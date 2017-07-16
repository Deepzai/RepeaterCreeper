function generateCommand() {
	var storeData = "";
	var output = "heroku config:set ";

    dataContent = $("#dataContent").val();
	keyEnv = dataContent.split("\n");
    if (dataContent.toLowerCase().includes("key")) { 
    	keyEnv.forEach(function(index){
    		storeData = storeData.concat(index + " ");
	    });
    } else {
        output = "Please make sure you entered your .ENV file in correctly." + "<br>" +
        "> Invalid Entry: " + $("#dataContent").val();
    }   
    
	$("#outputCommand").html(output + storeData);
	$("#dataContent").val('');
}