#include <windows.h>
#include <iostream>
#include <string>

using namespace std;
const float pi=3.14159265359;
class dane
{
protected:
    float a, b;
};
    class dodaj : dane
    {
        public:
         float licz(float a, float b)
        {
            cout<<"a+b= "<<a+b<<"\n";
        }
    };
class odejmij : dane
{
    public:
    float licz2(float a, float b)
   {
       cout<<"a-b= "<<a-b<<"\n";
   }
};
class mnoz : dane
{
    public:
    float licz3(float a, float b)
    {
        cout<<"a*b= "<<a*b<<"\n";
    }
};
class dziel : dane
{
    public:
    float licz4(float a, float b)
    {
        if(b!=0)
        {
            cout<<"a/b= "<<a/b<<"\n";
        }
        else return 0;
    }
};
int main()
{
   SYSTEMTIME st;
   GetLocalTime(&st);

   int godzina = st.wHour;
   int minuta  = st.wMinute;
   int sekunda = st.wSecond;
   int milisekunda = st.wMilliseconds;
   int dzien = st.wDay;
   int miesiac = st.wMonth;
   int rok = st.wYear;

   cout<<godzina<<":"<<minuta<<":"<<sekunda<<":"<<milisekunda<<endl;
   cout<<dzien<<":"<<miesiac<<":"<<rok<<endl;
    return 0;
}
//OD 11 medium
