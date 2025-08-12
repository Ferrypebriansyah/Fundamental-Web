package main

import "fmt"

func main() {
	kursus := []string{
		"Pemrograman Golang",
		"Basis Data",
		"Jaringan Komputer",
		"Sistem Operasi",
		"Kecerdasan Buatan",
		"Desktop",
	}

	kursusSaya := kursus[1:5] // dari index 1 s.d. 4
	kursusSaya = append(kursusSaya, "Manajemen Informatika")

	fmt.Println("Slice kursus:", kursus)
	fmt.Println("Panjang:", len(kursus), ", kapasitas:", cap(kursus))

	fmt.Println("Slice kursus saya:", kursusSaya)
	fmt.Println("Panjang:", len(kursusSaya), ", kapasitas:", cap(kursusSaya))
}
