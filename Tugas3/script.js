function cekNilai(){

    let nim = document.getElementById("nim").value;
    let nilai = document.getElementById("nilai").value;
    let hasil = document.getElementById("hasil");

    nilai = Number(nilai);

    if(nilai < 0 || nilai > 100){
        hasil.innerHTML = "Nilai tidak valid!";
        hasil.className = "error";
    }
    else{

        let grade;

        if(nilai >= 80){
            grade = "A";
        }
        else if(nilai >= 70){
            grade = "B";
        }
        else if(nilai >= 60){
            grade = "C";
        }
        else if(nilai >= 50){
            grade = "D";
        }
        else{
            grade = "E";
        }

        hasil.className = "";
        hasil.innerHTML = "NIM: " + nim + "<br>Huruf Mutu: " + grade;
    }

}
