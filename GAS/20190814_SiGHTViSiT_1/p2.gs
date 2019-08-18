function myFunctionP2() {
  var PRACTICE_SHEET = SpreadsheetApp.getActiveSpreadsheet().getSheetByName("Practice2");
  for(var i = 2; i <= PRACTICE_SHEET.getLastRow(); i++){
    var F = PRACTICE_SHEET.getRange(i, 6).getDisplayValue();
    if (F !== "TRUE"){
    var A = PRACTICE_SHEET.getRange(i, 1).getValue();
    var B = PRACTICE_SHEET.getRange(i, 2).getValue();
    var C = PRACTICE_SHEET.getRange(i, 3).getValue();
    var total = mySum(A, B, C);
    PRACTICE_SHEET.getRange(i,5).setValue(total);
    PRACTICE_SHEET.getRange(i,6).setValue("TRUE");
    }
  }
}

function mySum(A, B, C) {
  return A + "_" + B + "_" + C;
}
