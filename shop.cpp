#include <stdio.h>
#include <conio.h>
#include <iostream>
using namespace std;
int main(){
int jml,hrga,tunai;
float byr,total,kmbali;
char produk[5];

printf("\t struk pembelian \n");

puts("nama barang=");gets(produk);
printf(" harga=");scanf("%d",&hrga);
printf("jumlah barang=");scanf("%d,&jml");

printf("\n===========================\n");
printf("\t nana shop \n");
printf("nama kue= &s\n",produk);
printf("harga= rp.%\n",hrga);
printf("jumlah beli= rp.%d\n",byr);

byr=jml*hrga;
printf("maka bayar= rp. %1.1f\n",byr);
total=byr;
printf("tunai= rp. ");scanf("%d",&tunai);
kmbali=tunai-total;
printf("kembalian= rp. %1.1f\n",kmbali);
printf("=======================");
}
