package main

import "fmt"

type Mahasiswa struct {
	Nama string
	NPM  string
}

func main() {
	dataMahasiswa := map[string]Mahasiswa{
		"2012345678": {"Andi", "2IA24"},
		"2012345679": {"Budi", "2IA23"},
		"2012345680": {"Citra", "2IA21"},
	}

	var inputNPM string
	fmt.Print("Masukkan NPM mahasiswa: ")
	fmt.Scanf("%s", &inputNPM)

	mahasiswa, ditemukan := dataMahasiswa[inputNPM]
	if ditemukan {
		fmt.Println("\nData Mahasiswa:")
		fmt.Println("Nama :", mahasiswa.Nama)
		fmt.Println("NPM  :", mahasiswa.NPM)
	} else {
		fmt.Println("Mahasiswa dengan NPM tersebut tidak ditemukan.")
	}
}
