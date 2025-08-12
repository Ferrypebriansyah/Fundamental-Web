package main

import (
	"fmt"
	"log"
	"net/http"
)

func main() {
	PORT := ":8004" // 187 diganti dengan 3 digit belakang npm kalian ya
	http.Handle("/", http.FileServer(http.Dir("polymer")))
	fmt.Println("Listening on", PORT)
	log.Fatal(http.ListenAndServe(PORT, nil))
}