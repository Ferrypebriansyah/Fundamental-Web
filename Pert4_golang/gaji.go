package main

import "fmt"

func main() {
	var gajiSekarang, gajiEkspektasi int

	fmt.Print("Masukkan gaji anda : ")
	fmt.Scanln(&gajiSekarang)

	fmt.Print("Masukkan gaji yang anda inginkan : ")
	fmt.Scanln(&gajiEkspektasi)

	naikanGaji(&gajiSekarang, gajiEkspektasi)

	fmt.Printf("\nGaji anda sekarang %d\n", gajiSekarang)
}

func naikanGaji(gajiAwal *int, gajiAkhir int) {
	*gajiAwal = gajiAkhir
}
