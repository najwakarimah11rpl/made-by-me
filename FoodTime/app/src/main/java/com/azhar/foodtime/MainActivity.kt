package com.azhar.catering.main

import android.app.Activity
import android.content.Intent
import android.graphics.Color
import android.os.Build
import android.os.Bundle
import android.view.View
import android.view.Window
import android.view.WindowManager
import androidx.appcompat.app.AppCompatActivity
import androidx.cardview.widget.CardView
import androidx.recyclerview.widget.GridLayoutManager
import androidx.recyclerview.widget.LinearLayoutManager
import androidx.recyclerview.widget.RecyclerView
import com.azhar.catering.R
import com.azhar.catering.history.HistoryOrderActivity
import java.util.ArrayList
import java.util.List

class MainActivity : AppCompatActivity() {
    var modelCategoriesList: List<ModelCategories> = ArrayList()
    var modelTrendingList: List<ModelTrending> = ArrayList()
    var categoriesAdapter: CategoriesAdapter? = null
    var trendingAdapter: TrendingAdapter? = null
    var modelCategories: ModelCategories? = null
    var modelTrending: ModelTrending? = null
    var rvCategories: RecyclerView? = null
    var rvTrending: RecyclerView? = null
    var cvHistory: CardView? = null

    @Override
    protected fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)

        setStatusbar()
        setInitLayout()
        setCategories()
        setTrending()
    }

    private fun setInitLayout() {
        cvHistory = findViewById(R.id.cvHistory)
        cvHistory.setOnClickListener(object : OnClickListener() {
            @Override
            fun onClick(v: View?) {
                val intent: Intent = Intent(this@MainActivity, HistoryOrderActivity::class.java)
                startActivity(intent)
            }
        })

        rvCategories = findViewById(R.id.rvCategories)
        rvCategories.setLayoutManager(GridLayoutManager(this, 3))
        rvCategories.setHasFixedSize(true)

        rvTrending = findViewById(R.id.rvTrending)
        rvTrending.setLayoutManager(
            LinearLayoutManager(
                this,
                LinearLayoutManager.HORIZONTAL,
                false
            )
        )
        rvTrending.setHasFixedSize(true)
    }

    private fun setCategories() {
        modelCategories = ModelCategories(R.drawable.ic_complete, "Complete Package")
        modelCategoriesList.add(modelCategories)
        modelCategories = ModelCategories(R.drawable.ic_saving, "Saving Package")
        modelCategoriesList.add(modelCategories)
        modelCategories = ModelCategories(R.drawable.ic_healthy, "Healthy Package")
        modelCategoriesList.add(modelCategories)
        modelCategories = ModelCategories(R.drawable.ic_fast, "FastFood")
        modelCategoriesList.add(modelCategories)
        modelCategories = ModelCategories(R.drawable.ic_event, "Event Packages")
        modelCategoriesList.add(modelCategories)
        modelCategories = ModelCategories(R.drawable.ic_more_food, "Others")
        modelCategoriesList.add(modelCategories)

        categoriesAdapter = CategoriesAdapter(this, modelCategoriesList)
        rvCategories.setAdapter(categoriesAdapter)
    }

    private fun setTrending() {
        modelTrending = ModelTrending(R.drawable.complete_1, "Menu 1", "2.200 disukai")
        modelTrendingList.add(modelTrending)
        modelTrending = ModelTrending(R.drawable.complete_2, "Menu 2", "1.220 disukai")
        modelTrendingList.add(modelTrending)
        modelTrending = ModelTrending(R.drawable.complete_3, "Menu 3", "345 disukai")
        modelTrendingList.add(modelTrending)
        modelTrending = ModelTrending(R.drawable.complete_4, "Menu 4", "590 disukai")
        modelTrendingList.add(modelTrending)

        trendingAdapter = TrendingAdapter(this, modelTrendingList)
        rvTrending.setAdapter(trendingAdapter)
    }

    fun setStatusbar() {
        if (Build.VERSION.SDK_INT < 21) {
            setWindowFlag(this, WindowManager.LayoutParams.FLAG_TRANSLUCENT_STATUS, true)
        }
        if (Build.VERSION.SDK_INT >= 19) {
            if (Build.VERSION.SDK_INT >= Build.VERSION_CODES.M) {
                getWindow().getDecorView().setSystemUiVisibility(
                    View.SYSTEM_UI_FLAG_LAYOUT_STABLE
                            or View.SYSTEM_UI_FLAG_LAYOUT_FULLSCREEN or View.SYSTEM_UI_FLAG_LIGHT_STATUS_BAR
                )
            }
        }
        if (Build.VERSION.SDK_INT >= 21) {
            setWindowFlag(this, WindowManager.LayoutParams.FLAG_TRANSLUCENT_STATUS, false)
            getWindow().setStatusBarColor(Color.TRANSPARENT)
        }
    }

    companion object {
        fun setWindowFlag(@NonNull activity: Activity, bits: Int, on: Boolean) {
            val window: Window = activity.getWindow()
            val layoutParams: WindowManager.LayoutParams = window.getAttributes()
            if (on) {
                layoutParams.flags = layoutParams.flags or bits
            } else {
                layoutParams.flags = layoutParams.flags and bits.inv()
            }
            window.setAttributes(layoutParams)
        }
    }
}