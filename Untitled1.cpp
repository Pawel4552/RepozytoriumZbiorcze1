#define WIN32_LEAN_AND_MEAN
#define _WIN32_WINNT 0x0500

#include <windows.h>
#include <ctime>
#include <iostream>
#include <cstdlib>


#define SCREEN_WIDTH 1600
#define SCREEN_HEIGHT 900


void MouseSetup(INPUT *buffer)
{
    buffer->type = INPUT_MOUSE;
    buffer->mi.dx = (0 * (0xFFFF / SCREEN_WIDTH));
    buffer->mi.dy = (0 * (0xFFFF / SCREEN_HEIGHT));
    buffer->mi.mouseData = 0;
    buffer->mi.dwFlags = MOUSEEVENTF_ABSOLUTE;
    buffer->mi.time = 0;
    buffer->mi.dwExtraInfo = 0;
}


void MouseMoveAbsolute(INPUT *buffer, int x, int y)
{
    buffer->mi.dx = (x * (0xFFFF / SCREEN_WIDTH));
    buffer->mi.dy = (y * (0xFFFF / SCREEN_HEIGHT));
    buffer->mi.dwFlags = (MOUSEEVENTF_ABSOLUTE | MOUSEEVENTF_MOVE);

    SendInput(1, buffer, sizeof(INPUT));
}


void MouseClick(INPUT *buffer)
{
    buffer->mi.dwFlags = (MOUSEEVENTF_ABSOLUTE | MOUSEEVENTF_LEFTDOWN);
    SendInput(1, buffer, sizeof(INPUT));

    Sleep(10);

    buffer->mi.dwFlags = (MOUSEEVENTF_ABSOLUTE | MOUSEEVENTF_LEFTUP);
    SendInput(1, buffer, sizeof(INPUT));
}


int main(int argc, char *argv[])
{
    srand(time(NULL));
    float X,Y;
    INPUT buffer[1];

    MouseSetup(buffer);
    int time1 = clock();
    bool b = false;
    while(b == false)
    {
        int time2 = clock();
        if(time2 - time1 >= 4000)
        {
            b = true;
        }
    }

    for(int i = 0; i < 1000; i++)
    {
        int time1 = clock();
        bool b = false;
        while(b == false)
        {
            int time2 = clock();
            if(time2 - time1 >= 1000)
            {
                b = true;
            }
        }
        X = 620;
        Y = 440;
        MouseMoveAbsolute(buffer, X, Y);
        MouseClick(buffer);
        time1 = clock();
        b = false;
        while(b == false)
        {
            int time2 = clock();
            if(time2 - time1 >= 1000)
            {
                b = true;
            }
        }
        mouse_event(MOUSEEVENTF_LEFTDOWN | MOUSEEVENTF_LEFTUP | MOUSEEVENTF_WHEEL,0,0,-900,0);

        time1 = clock();
        b = false;
        while(b == false)
        {
            int time2 = clock();
            if(time2 - time1 >= 1000)
            {               b = true;
            }
        }

        X = 620;
        Y = 440;
        MouseMoveAbsolute(buffer, X, Y);
        MouseClick(buffer);

        time1 = clock();
        b = false;
        while(b == false)
        {
            int time2 = clock();
            if(time2 - time1 >= 1000)
            {
                b = true;
            }
        }

        mouse_event(MOUSEEVENTF_LEFTDOWN | MOUSEEVENTF_LEFTUP | MOUSEEVENTF_WHEEL,0,0,-2900,0);

        time1 = clock();
        b = false;
        while(b == false)
        {
            int time2 = clock();
            if(time2 - time1 >= 1000)
            {
                b = true;
            }
        }

        X = 590;
        Y = 615;
        MouseMoveAbsolute(buffer, X, Y);
        MouseClick(buffer);

        time1 = clock();
        b = false;
        while(b == false)
        {
            int time2 = clock();
            if(time2 - time1 >= 1000)
            {
                b = true;
            }
        }

        X = 220;
        Y = 20;
        MouseMoveAbsolute(buffer, X, Y);
        MouseClick(buffer);

        time1 = clock();
        b = false;
        while(b == false)
        {
            int time2 = clock();
            if(time2 - time1 >= 1000)
            {
                b = true;
            }
        }

        X = 150;
        Y = 20;
        MouseMoveAbsolute(buffer, X, Y);
        MouseClick(buffer);

        time1 = clock();
        b = false;
        while(b == false)
        {
            int time2 = clock();
            if(time2 - time1 >= 1000)
            {
                b = true;
            }
        }

        keybd_event(VK_CONTROL, 0, 0, 0);
        keybd_event(VkKeyScan('w'), 0, 0, 0);
        keybd_event(VK_CONTROL, 0, KEYEVENTF_KEYUP, 0);
        keybd_event(VkKeyScan('w'), 0, KEYEVENTF_KEYUP, 0);

        time1 = clock();
        b = false;
        while(b == false)
        {
            int time2 = clock();
            if(time2 - time1 >= 1000)
            {
                b = true;
            }
        }

        X = 1580;
        Y = 45;
        MouseMoveAbsolute(buffer, X, Y);
        MouseClick(buffer);

        time1 = clock();
        b = false;
        while(b == false)
        {
            int time2 = clock();
            if(time2 - time1 >= 4000)
            {
                b = true;
            }
        }

        X = 1470;
        Y = 240;
        MouseMoveAbsolute(buffer, X, Y);
        int losowa = rand()%600;
        mouse_event(MOUSEEVENTF_LEFTDOWN | MOUSEEVENTF_LEFTUP | MOUSEEVENTF_WHEEL,0,0,-losowa,0);
        MouseClick(buffer);////////////////////////////

        time1 = clock();
        b = false;
        while(b == false)
        {
            int time2 = clock();
            if(time2 - time1 >= 2000)
            {
                b = true;
            }
        }
    }


    return 0;
}
