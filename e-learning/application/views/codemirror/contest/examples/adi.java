import java.io.*;
import java.util.*;
import java.text.*;
import java.math.*;
import java.util.Map;
import java.io.PrintWriter;
import java.util.Map.Entry;
import java.util.regex.*;

public class Solution {
    public static void main(String[] args) {
    Scanner sc= new Scanner(System.in);
    PrintWriter me = new PrintWriter(System.out);
    int i=sc.nextInt();
    int j=sc.nextInt();
    int k=sc.nextInt();
    String si=Integer.toString(i)
    int ni=

    me.close();
    }
public static int gcd(int p, int q) {
          if (q == 0)
            return p;
          return gcd(q, p % q);
        }

public static boolean isprime(int number){
            for(int i=2; i<=number/2; i++){
                if(number % i == 0){
                    return false;
                }
            }
            return true;
          }
}
