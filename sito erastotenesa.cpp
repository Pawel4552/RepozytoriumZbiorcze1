#include <iostream>
#include <cmath>

using namespace std;

 int main()
 {
     int x;
     cout<<"podaj zakres 2 do: ";
     cin>>x;
     bool *tab=new bool[x+1];

     for(int i=2; i<=x; i++)
     {
         tab[i]=true;
     }


        for(int i=2; i<=sqrt(x); i++)
     {
         if(tab[i]==true)
            for(int j=i*i; j<=x; j+=i)
            tab[j]=false;
     }
     cout<<"liczby pierwsze  z zakresu 2 do "<<x<<" to: "<<endl;
     int licznik=0;
     for(int i=2; i<=x; i++)
     {
         if(tab[i]==true)
        {
            cout<<i<<endl;
        }
     }

     delete [] tab;
     return 0;
 }
