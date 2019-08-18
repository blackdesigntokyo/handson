function myFunction() {
  var GA_SHEET = SpreadsheetApp.getActiveSpreadsheet().getSheetByName("GAS");
  for(var i = 2; i <= GA_SHEET.getLastRow(); i++) {
    var x = GA_SHEET.getRange(i, 1).getValue();
    var y = GA_SHEET.getRange(i, 2).getValue();
    var total = mySum(x, y);
    GA_SHEET.getRange(i, 3).setValue(total);
    if((total % 2) == 0) {
      GA_SHEET.getRange(i, 4).setValue('偶数');      
    } else {
      GA_SHEET.getRange(i, 4).setValue('奇数');
    }
  }  
}

function mySum(x, y) {
  return x + y;
}
