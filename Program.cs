using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace swappingVariables
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int first_variable = 20;
            int second_variable = 10;

            Console.WriteLine("Before swapping:");
            Console.WriteLine("First variable: " + first_variable);
            Console.WriteLine("Second variable: " + second_variable);

            // Swap the variables without a third variable
            first_variable = first_variable + second_variable;
            second_variable = first_variable - second_variable;
            first_variable = first_variable - second_variable;

            Console.WriteLine("\nAfter swapping:");
            Console.WriteLine("First variable: " + first_variable);
            Console.WriteLine("Second variable: " + second_variable);
        }
    }
}

