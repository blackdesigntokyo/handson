function myFunctionP3() {
  var PRACTICE_SHEET = SpreadsheetApp.getActiveSpreadsheet().getSheetByName("Practice3");
  
  for(var i = 2; i <= PRACTICE_SHEET.getLastRow(); i++){
    var F = PRACTICE_SHEET.getRange(i, 6).getDisplayValue();
    if (F !== "TRUE"){
      var A = PRACTICE_SHEET.getRange(i, 1).getValue();
      var B = PRACTICE_SHEET.getRange(i, 2).getValue();
      var C = PRACTICE_SHEET.getRange(i, 3).getValue();
      var total = mySum03(A, B, C);
      PRACTICE_SHEET.getRange(i,5).setValue(total);
      
      var address = PRACTICE_SHEET.getRange(i, 4).getValue();
      var subject = mySum04(B);
      
      MailApp.sendEmail(address, subject, total);  
      
      PRACTICE_SHEET.getRange(i,6).setValue("TRUE");
      
      Logger.log(address);
      Logger.log(typeof "address");
      Logger.log(subject);
      Logger.log(typeof "subject");
      Logger.log(total);
      Logger.log(typeof "total");
      Logger.log("------");
      
    }
  }
}

function mySum03(A, B, C) {
  return A + "_" + B + "_" + C;
}
function mySum04(B) {
  return B + "様　LGTMです";
}
