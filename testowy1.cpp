#include <iostream>
#include <cstdlib>
#include <ctime>

using namespace std;

int main()
{
    int losowa=0;
    int probka=0;
    int i=0;
srand(time (NULL));
losowa = (rand()% 1000);
while(true)
{
    i++;
    cout<<"Zgadnij liczbe"<<endl;
   cin>>probka;
   if(probka>losowa)
    cout<<"Podana liczba jest za duza"<<endl;
    if(probka<losowa)
   cout<<"Podana liczba jest za mala"<<endl;
   if(probka==losowa)
   {
       cout<<"Gratulacje, zgadles liczbe!"<<endl<<"Poszukiwana liczba to: "<<losowa<<endl<<"strzaly: "<<i<<endl;
       break;
   }
}

return 0;
}
