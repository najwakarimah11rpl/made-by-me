#include <iostream>
using namespace std;
int main(){
float a,s,hasil;
char d;
cout<<"===================================\n   welcome to kalkuator by nana\n===================================\n \n";

cout<<"nilai pertama: ";
cin>>a;
cout<<"operator: +,-,*,/: ";
cin>>d;
cout<<"nilai kedua: ";
cin>>s;
cout<<endl;


cout<<"hasil=";
cout<<a<<d<<s;


if (d=='+'){
	hasil= a+s;
} else if (d=='-'){
	hasil=a-s;
} else if (d=='*'){
	hasil=a*s;
} else if (d=='/'){
	hasil=a/s;
} else {
	cout<<" sebaiknya jgn trlalu gegabah ";
}


cout<<" = "<<hasil;
	
}


