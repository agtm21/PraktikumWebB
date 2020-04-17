var angka1;
var angka2;
var opr;
var hasil;
var opr_selector = false;
//fungsi untuk menginputkan angka pada tombol - tombol yang ada
function ins(angka){
    var display = document.getElementById("dis").value;
	if (display == "0") {
		display = angka; 
	} else {
		display += angka;
	}
	document.getElementById("dis").value = display;
    
}
//fungsi untuk operator, jika operator di klik nilai akan direset menjadi 0 kemudian menginputkan bilangan kedua
function opr_func(x){
    opr_selector = true;
    angka1 = parseFloat(document.getElementById("dis").value);
    opr = x;
    document.getElementById("dis").value = "0";
    
}
//fungsi membersihkan layar
function cls(){
    document.getElementById("dis").value = "0";
    bil1 = 0;
	bil2 = 0;
	opr_selector = false;
}
//fungsi utama untuk kalkulasi hasil menggunakan switch case
function kalkulator(){
    if(opr_selector == true){
        var angka2 = parseFloat(document.getElementById("dis").value)//bilangan yang ada pada layar akan disimpan di variabel ini
        switch(opr){
            case 1:
                hasil = angka1 * angka2;//perkalian
                document.getElementById("dis").value= hasil;
                break;
            case 2:
                hasil = angka1 / angka2;//pembagian
                document.getElementById("dis").value = hasil;
                break;
            case 3:
                hasil = angka1 + angka2;//penjumlahan
                document.getElementById("dis").value = hasil;
                break;
            case 4:
                hasil = angka1 - angka2;//pengurangan
                document.getElementById("dis").value = hasil;
                break;
        }
        opr_selector = false
		hasil = 0;
		bil1 = 0;
        bil2 = 0;
    }
    
}
//fungsi jika ada koma
function koma() {
	var display = document.getElementById("dis").value;
	if (display.includes(".") == false) {
		display += ".";
	}
	document.getElementById("dis").value = display;	
}
//backspace atau menghapus 1 per 1
function del(){
    var val = document.getElementById("dis").value;
    document.getElementById("dis").value = val.substr(0,val.length-1);
}