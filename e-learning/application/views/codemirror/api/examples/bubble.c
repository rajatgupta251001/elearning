int main()
{
    int A[]={34,45,55,65,76,87,77,34,56,3345,354546,333,34453,2324};
    int i;
    printf("\n\nAfter Bubble sort\n\n");
    bubble_sort(A,14);
    for(i=0;i<=13;i++)
    {
     printf("%d\t",A[i]);
    }
}

void bubble_sort(int A[],int N)
{
     int round,i,temp;
     for(round=1;round<=N-1;round++)
     for(i=0;i<=N-1-round;i++)
     if(A[i]>A[i+1])
      {
         temp=A[i];
         A[i]=A[i+1];
         A[i+1]=temp;
      }
}
