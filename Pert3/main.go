package main

import "fmt"

// func main(){
// 	for i := 1; i <= 10; i++ {
// 		fmt.Println(i)
// 	}
// }

// func main() {
//     skor := 95 //Deklarasi nilai awal yang disimpan

// 	// Jika nilai lebih atau sama dengan 90 maka akan mencetak nilai A
//     if skor >= 90 {
//         fmt.Println("Nilai: A")
// 	// Jika nilai lebih atau sama dengan 90 maka akan mencetak nilai B
//     } else if skor >= 80 {
//         fmt.Println("Nilai: B")
// 	// Jika nilai lebih atau sama dengan 90 maka akan mencetak nilai C
//     } else if skor >= 70 {
//         fmt.Println("Nilai: C")
// 	// Jika nilai lebih atau sama dengan 90 maka akan mencetak nilai D
//     } else if skor >= 60 {
//         fmt.Println("Nilai: D")
// 	// Jika nilai lebih atau sama dengan 90 maka akan mencetak nilai E
//     } else {
//         fmt.Println("Nilai: E")
//     }
// }


func main() {
    var pilihan int

    fmt.Println("=== Menu Makanan ===")
    fmt.Println("1. Nasi Goreng")
    fmt.Println("2. Mie Ayam")
    fmt.Println("3. Soto Ayam")
    fmt.Println("4. Bakso")
    fmt.Print("Masukkan nomor menu pilihan Anda: ")
    fmt.Scan(&pilihan)

    switch pilihan {
    case 1:
        fmt.Println("Anda memilih Nasi Goreng")
    case 2:
        fmt.Println("Anda memilih Mie Ayam")
    case 3:
        fmt.Println("Anda memilih Soto Ayam")
    case 4:
        fmt.Println("Anda memilih Bakso")
    default:
        fmt.Println("Pilihan tidak tersedia")
    }
}
