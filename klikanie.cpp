#include <windows.h>
#include <ctime>

void odczekaj2()
{
    bool b = false;
    int czas1 = clock();
    int czas2;
    while(!b)
    {
        czas2 = clock();
        if(czas2 - czas1 > 5000)
        {
            b = true;
        }
    }
}

void odczekaj()
{
    bool b = false;
    int czas1 = clock();
    int czas2;
    while(!b)
    {
        czas2 = clock();
        if(czas2 - czas1 > 1000)
        {
            b = true;
        }
    }
}
int main()
{
    odczekaj2();
    while(true)
    {
        odczekaj();
        mouse_event(MOUSEEVENTF_LEFTDOWN | MOUSEEVENTF_LEFTUP | MOUSEEVENTF_WHEEL,0,0,-600,0);
        odczekaj();
        SetCursorPos(630, 470);
        odczekaj();
        mouse_event(MOUSEEVENTF_LEFTDOWN | MOUSEEVENTF_LEFTUP,0,0,0,0);
        odczekaj();
        mouse_event(MOUSEEVENTF_LEFTDOWN | MOUSEEVENTF_LEFTUP | MOUSEEVENTF_WHEEL,0,0,-3500,0);
        odczekaj();
        SetCursorPos(500, 630);
        odczekaj();
        mouse_event(MOUSEEVENTF_LEFTDOWN | MOUSEEVENTF_LEFTUP,0,0,0,0);
        odczekaj();
        SetCursorPos(230, 20);
        odczekaj();
        mouse_event(MOUSEEVENTF_LEFTDOWN | MOUSEEVENTF_LEFTUP,0,0,0,0);
        odczekaj();
        SetCursorPos(130, 20);
        odczekaj();
        mouse_event(MOUSEEVENTF_LEFTDOWN | MOUSEEVENTF_LEFTUP,0,0,0,0);
        odczekaj();

        keybd_event(VK_CONTROL, 0, 0, 0);
        keybd_event(VkKeyScan('w'), 0, 0, 0);
        keybd_event(VK_CONTROL, 0, KEYEVENTF_KEYUP, 0);
        keybd_event(VkKeyScan('w'), 0, KEYEVENTF_KEYUP, 0);
        odczekaj();
        SetCursorPos(500, 300);
        odczekaj();
    }
    return 0;
}
