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
    ArrayList al=new ArrayList();
    int len=sc.nextInt();
    String str=sc.next();
    String atr=sc.next();
    for(int i=0;i<len;i++){
      int x=Character.getNumericValue(str.charAt(i));
      int y=Character.getNumericValue(atr.charAt(i));
      int res=Math.abs(x-y);
      if(res<5)
        al.add(res);
      else
        al.add(10-res);

    }
    me.println(al);

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
