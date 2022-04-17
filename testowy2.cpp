#include <iostream>
#include <cstdlib>
#include <ctime>

using namespace std;

int losuj_tablice(int tab1[], int x, int zakres, int baza)
{
    int i=0, k, tym;
    bool test;

    while(i<x)
    {
        test=true;
        /*
        if( ile <= 0 )
         return false;

    int i = 0;
    do
    {
        if( tab[ i ] == iLiczba )
             return true;

        i++;
    } while( i < ile );

    return false;*/
    k=i-1;
    tym=(rand()%zakres)+baza;
        while((k>=0)&&(k<x))
        {
            if(tab1[k]==tym)
            {
                test=false;
                break;
            }
            k--;
        }
        if(test==true)
        {
           tab1[i]=tym;
           tym=0;
            i++;
        }
    }
    return tab1[x];
}
int sumuj_losowe(int tab1[])
{
    int wynik=0;
     for(int i=0; i<5; i++)
    {
        wynik+=tab1[i];
    }
    return wynik;
}
void wynik_tablicy(int wynik)
{
    cout<<endl<<endl<<"Wynik: "<<wynik<<endl;
}
void wypisz_tablice(int tab1[], int x)
{
    for(int i=0; i<x; i++)
    {
        cout<<"tab od "<<i<<" = "<<tab1[i]<<endl;
    }
    cout<<endl;
      for(int i=--x; i>=0; i--)
      {
          cout<<"tab od "<<i<<" = "<<tab1[i]<<endl;
      }

}
void wypisz_tablice_spec(int tab1[], int tab2[], int x)
{
    for(int i=0; i<x; i++)
     cout<<"tab od "<<tab2[i]<<" = "<<tab1[tab2[i]]<<endl;
}
int ciag (int tab3[])
{
    for(int i=0;i<20;i++)
    {
        tab3[i]=1+i*5;
    }
    return tab3[20];
}
int MAX (int tab[], int x)
{
    int maks=tab[0];
    for(int i=1; i<x; i++)
    {
        if(tab[i]>maks)
            maks=tab[i];
    }
    cout<<"Najwieksza liczba z zakresu to "<<maks<<endl;
}
int MIN (int tab[], int x)
{
    int mini=tab[0];
    for(int i=1; i<x; i++)
    {
        if(tab[i]<mini)
            mini=tab[i];
    }
    cout<<"Najwieksza liczba z zakresu to "<<mini<<endl;
}
int main()
{
    srand(time(NULL));
    //int tab1[3], wynik=0, tab2[2];
    //losuj_tablice(tab1, 25, 499, 1);
   // losuj_tablice(tab2, 10, 25, 0);
   //wynik=sumuj_losowe(tab1);
   //wynik_tablicy(wynik);
   //wypisz_tablice(tab1, 25);
   //wypisz_tablice_spec(tab1, tab2, 10);
   //int tab3[20];
   //ciag(tab3);
   //wypisz_tablice(tab3, 20);
   int tab4[10];
   losuj_tablice(tab4, 10, 20, 10);
   wypisz_tablice(tab4, 10);
   MAX(tab4, 10);
   MIN(tab4, 10);
return 0;
}
