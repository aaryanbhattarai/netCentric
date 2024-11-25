using System;

namespace jaggedArray
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.Write("Enter the year: ");
            int year = int.Parse(Console.ReadLine());

            Console.Write("Enter the month (1-12): ");
            int month = int.Parse(Console.ReadLine());

            if (month < 1 || month > 12)
            {
                Console.WriteLine("Invalid month. Please run the program again.");
                return;
            }

            PrintCalendar(year, month);
        }

        static void PrintCalendar(int year, int month)
        {
            // Get the first day of the month and its day of the week
            DateTime firstDayOfMonth = new DateTime(year, month, 1);
            int firstDayOfWeek = (int)firstDayOfMonth.DayOfWeek;

            // Get the total days in the month
            int daysInMonth = DateTime.DaysInMonth(year, month);

            // Calculate the number of weeks needed to display the calendar
            int weeks = (int)Math.Ceiling((daysInMonth + firstDayOfWeek) / 7.0);

            // Print the header with day names
            Console.WriteLine("\nCalendar for {0:MMMM yyyy}\n", firstDayOfMonth);
            Console.WriteLine("Sun Mon Tue Wed Thu Fri Sat");

            // Iterate through each week and day
            int day = 1;
            for (int week = 0; week < weeks; week++)
            {
                for (int dayOfWeek = 0; dayOfWeek < 7; dayOfWeek++)
                {
                    if (week == 0 && dayOfWeek < firstDayOfWeek)
                    {
                        // Print empty spaces before the first day of the month
                        Console.Write("   ");
                    }
                    else if (day <= daysInMonth)
                    {
                        // Print the day, formatted with leading zeros if needed
                        Console.Write("{0:D2} ", day++);
                    }
                    else
                    {
                        // Print empty spaces after the last day of the month
                        Console.Write("   ");
                    }
                }
                Console.WriteLine();
            }
        }
    }
}