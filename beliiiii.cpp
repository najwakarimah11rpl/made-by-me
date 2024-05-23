#include <iostream>
using namespace std;
int main(){
cout<<"menghitung potongan pembelian"<<endl;
cout<<"masukan pembelian anda=";
int d;
float a,s;
cin>>a;
if (d>9){
	s=0.02*d;
}
else{
	s=8;
}
cout<<"pembelian anda="<<d<<endl;
cout<<"pot pembelian anda="<<s<<endl;
cout<<"jumlah yg hrs didapat="<<a;
}
