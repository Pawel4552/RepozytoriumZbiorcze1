#include<iostream>
#include <cstring>
using namespace std;

void sortuj(string *tab, int n)
{

}
int main()
{
    string *tab;
    int n;
    cout<<"Ile elemtów tablicy?";
    cin>>n;
    tab= new string [n];
    cout>"podaj elementy: \n";
    for(int i=0; i<n; i++)
    {
        cin>>tab[i];
    }
    for(int i=0; i<n; i++)
    {
        cout<<tab[i]<<"\n";
    }
    return 0;
}
